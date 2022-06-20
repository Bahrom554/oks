<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Filemanager\Entities\Files;

class MenuItems extends Model
{
    protected $table = 'menu_items';

    protected $fillable = ['menu_id', 'title', 'url', 'file_id', 'sort', 'menu_item_parent_id', 'status', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'menu_id' => 'integer',
            'title' => 'string',
            'url' => 'string',
            'file_id' => 'integer|nullable',
            'sort' => 'integer|nullable',
            'menu_item_parent_id' => 'integer|nullable',
            'status' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
        ];
    }

    protected $with = ['file', 'menuItems'];

    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }

    public function menuItems(): HasMany
    {
        return $this->hasMany(MenuItems::class, 'menu_item_parent_id','id')->orderBy('sort', 'ASC');
    }
}
