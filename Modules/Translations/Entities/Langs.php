<?php

namespace Modules\Translations\Entities;

use Illuminate\Database\Eloquent\Model;

class Langs extends Model
{
    protected $table = 'langs';

    protected $fillable = ['id', 'name', 'code', 'status'];

    public static function rules()
    {
        return [
            'name' => 'string|required',
            'code' => 'string|required',
            'status' => 'integer'
        ];
    }

    public static function getLangId($lang)
    {
        return \Modules\Translations\Entities\Langs::where('code', $lang)->first()->id;
    }

    public static function getLangCode($id)
    {
        return \Modules\Translations\Entities\Langs::where('id', $id)->first()->code;
    }

}
