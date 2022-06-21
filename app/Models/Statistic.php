<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = 'statistics';

    protected $fillable = ['created_at', 'eur', 'lang', 'lang_hash', 'rub', 'type', 'updated_at', 'uran', 'usd',];

    public static function rules()
    {
        return [
            'created_at' => 'datetime|nullable',
            'eur' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'rub' => 'integer|nullable',
            'type' => 'integer|nullable',
            'updated_at' => 'datetime|nullable',
            'uran' => 'integer|nullable',
            'usd' => 'integer|nullable',

        ];
    }
    public function StatisticItem()
    {
        return $this->hasMany(StatisticItem::class, 'parent_id', 'id')->orderBy('sort', 'ASC');
    }
}
