<?php

namespace Modules\Translations\Entities;

use Illuminate\Database\Eloquent\Model;

class SystemMessageTranslation extends Model
{
    protected $table = '_system_message_translation';

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = ['id', 'language', 'translation'];

    public function getSystemMessageAttribute()
    {
        return $this->hasOne('Modules\Translations\Entities\SystemMessage');
    }

    public static function rules()
    {
        return [
            'id' => 'required|integer|exists:_system_message,id',
            'language' => 'required|string|exists:langs,code',
            'translation' => ''
        ];
    }

    public static function generateJs()
    {
        error_reporting(2245);
        $langs = Langs::where(['status' => 1])->get();
        $messages = SystemMessages::all();
        foreach ($langs as $lang) {
            $data = [];
            foreach ($messages as $message) {
                $item = self::where([
                    'id' => $message['id'],
                    'language' => $lang->code
                ])->first();
                if (is_object($item) && strlen($item->translation) !== 0) {
                    $data[$message['message']] = $item->translation;
                    continue;
                }
                $data[$message['message']] = $message['message'];
            }

            $path = config('translations.path');
            foreach ($path as $item) {
                $link = $item . '/locales/' . $lang->code . '/translation.json';
                if (!is_dir($item . '/locales/' . $lang->code)) {
                    mkdir($item . '/locales/' . $lang->code);
                }
                unlink($item . '/locales/' . $lang->code);
                $fp = fopen($link, 'w');
                fwrite($fp, json_encode($data, JSON_UNESCAPED_UNICODE));
                fclose($fp);
            }
        }
        return true;
    }

    public static function gene($lang)
    {
        $lang = Langs::where(['code' => $lang])->first();
        error_reporting(2245);
        $langs = Langs::where(['status' => 1])->get();
        $messages = SystemMessages::all();

        $data = [];
        foreach ($messages as $message) {
            $item = self::where([
                'id' => $message['id'],
                'language' => $lang->code
            ])->first();
            if (is_object($item) && strlen($item->translation) !== 0) {
                $data[$message['message']] = $item->translation;
                continue;
            }
            $data[$message['message']] = $message['message'];
        }

        $path = config('translations.path');


        return $data;
    }

}
