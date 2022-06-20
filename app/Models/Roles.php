<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';

    public $timestamps = false;

    protected $fillable = ['user_id', 'role',];

    public static function rules()
    {
        return [
            'user_id' => 'integer|nullable',
            'role' => 'string|nullable',
        ];
    }
}
