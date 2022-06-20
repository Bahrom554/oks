<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{   use Translatable;
    protected $table = 'statistics';

    protected $fillable = ['title', 'alias', 'status', 'type', 'lang', 'lang_hash', 'created_at', 'updated_at',];

    public static function rules()
    {
        return [
            'title' => 'string|nullable',
            'alias' => 'string|nullable',
            'status' => 'integer|nullable',
            'type' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',

        ];
    }
    public function statisticItem(){

        return $this->hasMany(StatisticItem::class,'parent_id','id')->orderBy('sort','ASC');
    }
    public function setTitleAttribute($value)
    {
        $this->setTranslation($value, 'title');
    }

    public function getTranslationsAttribute(): array
    {
        return $this->getTranslation('statistics');
    }


}
