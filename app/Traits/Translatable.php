<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Modules\Translations\Entities\Langs;

trait Translatable
{
    public function setTranslation($value, $attr)
    {
        $this->attributes[$attr] = $value;

        if (!array_key_exists('id', $this->attributes)) {
            $this->attributes['lang_hash'] = empty($this->attributes['lang_hash'])
                ? Str::random(32)
                : $this->attributes['lang_hash'];

            $this->attributes['lang'] = empty($this->attributes['lang'])
                ? Langs::getLangId(Lang::getLocale())
                : $this->attributes['lang'];
        }
    }

    public function getTranslation($table): array
    {
        $data = [];
        $models = DB::table($table)
            ->where('id','<>', $this->id)
            ->where('lang_hash', $this->lang_hash)
            ->get();

        if (count($models) > 0) {
            foreach ($models as $model) {
                $lang = Langs::getLangCode($model->lang);
                $data[] = [
                    'id' => $model->id,
                    'lang' => $lang
                ];
            }
        }

        return $data;
    }
}
