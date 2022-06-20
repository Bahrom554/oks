<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Filemanager\Entities\Files;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = ['name', 'phone', 'message', 'services', 'email', 'files', 'type', 'address', 'status', 'drink', 'deleted_at', 'created_at', 'updated_at',];

    public static function rules()
    {
        return [
            'name' => 'string|nullable',
            'phone' => 'string|nullable',
            'message' => 'string|nullable',
            'services' => 'string|nullable',
            'email' => 'string|nullable',
            'files' => 'string|nullable',
            'type' => 'integer|nullable',
            'address' => 'string|nullable',
            'status' => 'integer|nullable',
            'drink' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
        ];
    }


    public function getFilesAttribute()
    {
        return Files::where(['id' => intval($this->attributes['files'])])->first();
    }

}
