<?php

namespace App\Model\Admin;

use App\Model\BaseModel;
use App\Model\Common\File;

class Banner extends BaseModel
{
    protected $table = 'banners';

    public function image()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image');
    }

    public function image_part1()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_part1');
    }

    public function image_part2()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_part2');
    }

    public function image_part3()
    {
        return $this->morphOne(File::class, 'model')->where('custom_field', 'image_part3');
    }

    public static function searchByFilter($request)
    {
        $result = self::with([
            'image',
            'image_part1',
            'image_part2',
            'image_part3',
        ]);

        if (!empty($request->title)) {
            $result = $result->where('title', 'like', '%' . $request->title . '%');
        }

        $result = $result->orderBy('created_at', 'desc')->get();
        return $result;
    }

    public static function getDataForEdit($id)
    {
        return self::with('image', 'image_part1', 'image_part2', 'image_part3')->where('id', $id)
            ->firstOrFail();
    }

    public function canDelete()
    {
        return true;
    }
}
