<?php

namespace App\Model\Admin;

use App\Model\BaseModel;

class Question extends BaseModel
{
    protected $table = 'questions';
    protected $fillable = ['title', 'content'];

    public static function searchByFilter($request) {
        $result = self::query();

        if (!empty($request->title)) {
            $result = $result->where('title', 'like', '%'.$request->title.'%');
        }

        $result = $result->orderBy('created_at','desc');
        return $result;
    }

    public static function getDataForEdit($id) {
        return self::where('id', $id)
            ->firstOrFail();
    }

    public function canDelete()
    {
        return true;
    }
}
