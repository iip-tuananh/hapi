<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use stdClass;
use Exception;
use App\Model\Admin\AboutUs as ThisModel;
use App\Helpers\FileHelper;

class AboutUsController extends Controller
{
    protected $view = 'admin.about_us';
    protected $route = 'about_us';

    public function index()
    {
        return view($this->view . '.index');
    }

    // Hàm lấy data cho bảng list
    public function searchData(Request $request)
    {
        $objects = ThisModel::searchByFilter($request);
        return Datatables::of($objects)
            ->editColumn('updated_by', function ($object) {
                return $object->user_update->name ?? '';
            })
            ->editColumn('created_by', function ($object) {
                return $object->user_update->name ?? '';
            })
            ->editColumn('updated_at', function ($object) {
                return formatDate($object->updated_at);
            })
            ->editColumn('link', function ($object) {
                return '<a href="' . $object->youtube_link . '">' . $object->youtube_link . '</a>';
            })
            ->addColumn('image', function ($object) {
                return '<img class="thumbnail img-preview" src="' . ($object->image ? $object->image->path : '') . '">';
            })
            ->addColumn('action', function ($object) {
                $result = '';
                $result .= '<a href="javascript:void(0)" title="Sửa" class="btn btn-sm btn-primary edit"><i class="fas fa-pencil-alt"></i></a> ';
                $result .= '<a href="' . route($this->route . '.delete', $object->id) . '" title="Xóa" class="btn btn-sm btn-danger confirm"><i class="fas fa-times"></i></a>';
                return $result;
            })
            ->addIndexColumn()
            ->rawColumns(['link', 'action', 'image'])
            ->make(true);
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function edit(Request $request, $id)
    {
        $object = ThisModel::getDataForEdit($id);
        return view($this->view . '.edit', compact('object'));
    }

    public function update(Request $request, $id)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'home_title' => 'required',
                'home_description' => 'required',
                'home_image' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'description' => 'required',
                'content' => 'required',
                'mission' => 'required',
                'vision' => 'required',
                'core_values' => 'required',
                'image' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'image_mission' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'image_vision' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'image_core_values' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'image_raw_material_area' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'galleries' => 'nullable|array',
                'galleries.*.image' => 'nullable|file|mimes:jpg,jpeg,png|max:10240',
                'galleries.*.content' => 'nullable',
            ]
        );
        $json = new stdClass();

        if ($validate->fails()) {
            $json->success = false;
            $json->errors = $validate->errors();
            $json->message = "Thao tác thất bại!";
            return Response::json($json);
        }

        // DB::beginTransaction();
        // try {
            $object = ThisModel::findOrFail($id);
            $object->name = $request->name;
            $object->home_title = $request->home_title;
            $object->home_description = $request->home_description;
            $object->youtube_link = $request->youtube_link;
            $object->description = $request->description;
            $object->content = $request->content;
            $object->mission = $request->mission;
            $object->vision = $request->vision;
            $object->core_values = $request->core_values;
            $object->raw_material_area = $request->raw_material_area;
            $object->save();

            if ($request->home_image) {

                if ($object->home_image) {
                    FileHelper::deleteFileFromCloudflare($object->home_image->id, $object->id, ThisModel::class, 'home_image');
                }

                FileHelper::uploadFileToCloudflare($request->home_image, $object->id, ThisModel::class, 'home_image');
            }

            if ($request->image) {

                if ($object->image) {
                    FileHelper::deleteFileFromCloudflare($object->image->id, $object->id, ThisModel::class, 'image');
                }

                FileHelper::uploadFileToCloudflare($request->image, $object->id, ThisModel::class, 'image');
            }

            if ($request->image_mission) {
                if ($object->image_mission) {
                    FileHelper::deleteFileFromCloudflare($object->image_mission->id, $object->id, ThisModel::class, 'image_mission');
                }
                FileHelper::uploadFileToCloudflare($request->image_mission, $object->id, ThisModel::class, 'image_mission');
            }

            if ($request->image_vision) {
                if ($object->image_vision) {
                    FileHelper::deleteFileFromCloudflare($object->image_vision->id, $object->id, ThisModel::class, 'image_vision');
                }
                FileHelper::uploadFileToCloudflare($request->image_vision, $object->id, ThisModel::class, 'image_vision');
            }

            if ($request->image_core_values) {
                if ($object->image_core_values) {
                    FileHelper::deleteFileFromCloudflare($object->image_core_values->id, $object->id, ThisModel::class, 'image_core_values');
                }
                FileHelper::uploadFileToCloudflare($request->image_core_values, $object->id, ThisModel::class, 'image_core_values');
            }

            if ($request->image_raw_material_area) {
                if ($object->image_raw_material_area) {
                    FileHelper::deleteFileFromCloudflare($object->image_raw_material_area->id, $object->id, ThisModel::class, 'image_raw_material_area');
                }
                FileHelper::uploadFileToCloudflare($request->image_raw_material_area, $object->id, ThisModel::class, 'image_raw_material_area');
            }

            if ($request->galleries) {
                $object->syncGalleries($request->galleries);
            }

            // DB::commit();
            $json->success = true;
            $json->message = "Thao tác thành công!";
            $json->data = $object;
            return Response::json($json);
        // } catch (Exception $e) {
        //     DB::rollBack();
        //     throw new Exception($e->getMessage());
        // }
    }

    public function delete($id)
    {
        $object = ThisModel::findOrFail($id);
        if (!$object->canDelete()) {
            $message = array(
                "message" => "Không thể xóa!",
                "alert-type" => "warning"
            );
        } else {
            if (isset($object->home_image)) {
                FileHelper::deleteFileFromCloudflare($object->home_image->id, $object->id, ThisModel::class, 'home_image');
            }
            if (isset($object->image)) {
                FileHelper::deleteFileFromCloudflare($object->image->id, $object->id, ThisModel::class, 'image');
            }
            if (isset($object->image_mission)) {
                FileHelper::deleteFileFromCloudflare($object->image_mission->id, $object->id, ThisModel::class, 'image_mission');
            }
            if (isset($object->image_vision)) {
                FileHelper::deleteFileFromCloudflare($object->image_vision->id, $object->id, ThisModel::class, 'image_vision');
            }
            if (isset($object->image_core_values)) {
                FileHelper::deleteFileFromCloudflare($object->image_core_values->id, $object->id, ThisModel::class, 'image_core_values');
            }
            if (isset($object->image_raw_material_area)) {
                FileHelper::deleteFileFromCloudflare($object->image_raw_material_area->id, $object->id, ThisModel::class, 'image_raw_material_area');
            }

            if (isset($object->galleries)) {
                foreach ($object->galleries as $gallery) {
                    if (isset($gallery->image)) {
                        FileHelper::deleteFileFromCloudflare($gallery->image->id, $gallery->id, AboutUsGallery::class, null);
                        $gallery->image->removeFromDB();
                    }
                    $gallery->removeFromDB();
                }
            }
            $object->delete();
            $message = array(
                "message" => "Thao tác thành công!",
                "alert-type" => "success"
            );
        }


        return redirect()->route($this->route . '.index')->with($message);
    }
}
