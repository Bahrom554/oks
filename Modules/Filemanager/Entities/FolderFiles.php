<?php

namespace Modules\Filemanager\Entities;

use Illuminate\Database\Eloquent\Model;

class FolderFiles extends Model
{
    protected $table = 'files_folder';

    protected $fillable = ['id', 'title', 'description', 'slug', 'parent_id', 'status', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'title' => 'string',
            'slug' => 'string|nullable',
            'description' => 'string|nullable',
            'status' => 'integer|nullable',
            'parent_id' => 'integer|nullable',
        ];
    }

    public function getChildAttribute()
    {
        return $this->belongsToMany(self::class, ['parent_id' => 'id']);
    }
}
