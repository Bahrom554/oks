<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use Translatable;

    protected $table = 'menu';

    protected $fillable = ['id', 'title', 'alias', 'type', 'lang', 'lang_hash', 'status', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'title' => 'string|required',
            'alias' => 'string|nullable',
            'type' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'status' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
        ];
    }

    public function menuItems()
    {
        return $this->hasMany(MenuItems::class, 'menu_id', 'id')->whereNull('menu_item_parent_id')->orderBy('sort', 'ASC');
    }

    public function setTitleAttribute($value)
    {
        $this->setTranslation($value, 'title');
    }

    public function getTranslationsAttribute(): array
    {
        return $this->getTranslation('menu');
    }
}
