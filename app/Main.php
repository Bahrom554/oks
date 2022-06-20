<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function scopeActive($query)
    {
        return $query->where(['status' => self::STATUS_ACTIVE]);
    }
}
