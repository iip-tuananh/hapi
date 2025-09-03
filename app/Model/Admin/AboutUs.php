<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Common\File;
use App\Helpers\FileHelper;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable = ['name', 'slug', 'youtube_link', 'description', 'content', 'mission', 'vision', 'core_values', 'raw_material_area', 'home_title', 'home_description'];

    public function image()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image');
    }

    public function home_image()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'home_image');
    }

    public function image_mission()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_mission');
    }

    public function image_vision()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_vision');
    }

    public function image_core_values()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_core_values');
    }

    public function image_raw_material_area()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_raw_material_area');
    }

    public function galleries()
    {
        return $this->hasMany(AboutUsGallery::class, 'about_us_id', 'id');
    }

    public static function searchByFilter($request)
    {
        $result = self::with([
            'image',
            'home_image',
            'image_mission',
            'image_vision',
            'image_core_values',
            'image_raw_material_area',
            'galleries',
        ]);

        if (!empty($request->name)) {
            $result = $result->where('name', 'like', '%' . $request->name . '%');
        }

        $result = $result->orderBy('created_at', 'desc')->get();
        return $result;
    }

    public static function getDataForEdit($id)
    {
        return self::with([
            'image',
            'home_image',
            'image_mission',
            'image_vision',
            'image_core_values',
            'image_raw_material_area',
            'galleries' => function ($q) {
                $q->select(['id', 'about_us_id', 'sort'])
                    ->with(['image'])
                    ->orderBy('sort', 'ASC');
            },
        ])->where('id', $id)
            ->firstOrFail();
    }

    public function canDelete()
    {
        return true;
    }

    public function syncGalleries($galleries)
    {
        if ($galleries) {
            $exist_ids = [];
            foreach ($galleries as $g) {
                if (isset($g['id'])) array_push($exist_ids, $g['id']);
            }

            $deleted = AboutUsGallery::where('about_us_id', $this->id)->whereNotIn('id', $exist_ids)->get();
            foreach ($deleted as $item) {
                if ($item->image) {
                    FileHelper::deleteFileFromCloudflare($item->image, $item->id, AboutUsGallery::class, null);
                    $item->image->removeFromDB();
                }
                $item->removeFromDB();
            }

            for ($i = 0; $i < count($galleries); $i++) {
                $g = $galleries[$i];

                if (isset($g['id'])) $gallery = AboutUsGallery::find($g['id']);
                else $gallery = new AboutUsGallery();

                $gallery->about_us_id = $this->id;
                $gallery->sort = $i;
                $gallery->save();

                if (isset($g['image'])) {
                    if ($gallery->image) {
                        FileHelper::deleteFileFromCloudflare($gallery->image, $gallery->id, AboutUsGallery::class, null);
                        $gallery->image->removeFromDB();
                    }
                    $file = $g['image'];
                    FileHelper::uploadFileToCloudflare($file, $gallery->id, AboutUsGallery::class, null);
                }
            }
        } else {
            $galleries = $this->galleries;
            foreach ($galleries as $gallery) {
                if ($gallery->image) {
                    FileHelper::deleteFileFromCloudflare($gallery->image, $gallery->id, AboutUsGallery::class, null);
                    $gallery->image->removeFromDB();
                }
            }
            $this->galleries()->delete();
        }
    }
}
