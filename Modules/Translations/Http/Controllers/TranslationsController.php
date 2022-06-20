<?php

namespace Modules\Translations\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Translations\Entities\Langs;
use Modules\Translations\Entities\SystemMessages;
use Modules\Translations\Entities\SystemMessageTranslation;
use Nwidart\Modules\Collection;

class TranslationsController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $messages = SystemMessages::all();
        $json = [];
        if (count($messages) == 0) {
            return $data;
        }
        foreach ($messages as $message) {
            $translate = SystemMessageTranslation::where(['id' => $message->id, 'language' => $request->language])->first();
            if (is_object($translate)) {
                $json[$message['message']] = @$translate['message'];
                continue;
            }
            $json[$message['message']] = @$message['message'];
        }

        return $json;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $data = $request->toArray();
        if (empty($message = array_shift($data)) && count($data) < 3) {
            return;
        }

        $model = SystemMessages::where(['message' => $message])->first();
        if ($model) {
            return $model;
        }

        $model = SystemMessages::create([
            'category' => 'react',
            'message' => $message
        ]);
        SystemMessageTranslation::generateJs();
        return $model;
    }

    public function createTranslation(Request $request)
    {
        $request->validate(SystemMessageTranslation::rules());

        $translate = SystemMessageTranslation::find($request->id)
            ->where(['language' => $request->language])
            ->first();

        if (is_object($translate)) {
            $translate->translation = $request->translation;
            $translate->save();
            return $translate;
        }
        return SystemMessageTranslation::create([
            'id' => $request->id,
            'language' => $request->language,
            'translation' => $request->translation
        ]);
    }

    public function list(Request $request)
    {
        $message = $request->message;
        if (!empty($message)) {
            $sourses = SystemMessages::where('message', 'LIKE', '%' . $message . '%')->orderBy('id', 'DESC')->get();
        } else {
            $sourses = SystemMessages::orderBy('id', 'DESC')->get();
        }
        $data = [];

        foreach ($sourses as $key => $sours) {
            $langs = Langs::where(['status' => 1])->get();
            $data_lang = [];
            foreach ($langs as $lang) {
                $model = SystemMessageTranslation::where(['id' => $sours->id, 'language' => $lang->code])->first();
                if ($model) {
                    $data_lang[$lang->code] = $model->translation;
                }
            }

            $data[$key] = [
                'id' => $sours->id,
                'message' => $sours->message,
                'oz' => empty(array_key_exists('oz', $data_lang)) ? '' : $data_lang['oz'],
                'uz' => empty(array_key_exists('uz', $data_lang)) ? '' : $data_lang['uz'],
                'ru' => empty(array_key_exists('ru', $data_lang)) ? '' : $data_lang['ru'],
                'en' => empty(array_key_exists('en', $data_lang)) ? '' : $data_lang['en'],
            ];
        }

        return $this->paginate($data);
    }

    public function paginate($items, $perPage = 50, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function change(Request $request)
    {
        if ($model = SystemMessageTranslation::where(['id' => $request->id, 'language' => $request->language])->first()) {
            DB::table('_system_message_translation')
                ->where(['id' => $request->id, 'language' => $request->language])
                ->update(['translation' => $request->translation]);

            SystemMessageTranslation::generateJs();
            return $this->getData($model);
        }

        $model = SystemMessageTranslation::create([
            'id' => $request->id,
            'language' => $request->language,
            'translation' => $request->translation
        ]);
        SystemMessageTranslation::generateJs();
        return $this->getData($model);
    }

    public function getData($model)
    {
        $langs = Langs::where(['status' => 1])->get();
        $data_lang = [];
        $data = [];
        foreach ($langs as $lang) {
            $src = SystemMessageTranslation::where(['id' => $model->id, 'language' => $lang->code])->first();
            if ($src) {
                $data_lang[$lang->code] = $src->translation;
            }
        }
        $message = SystemMessages::where(['id' => $model->id])->first();
        $data = [
            'id' => $model->id,
            'message' => $message->message,
            'oz' => empty(array_key_exists('oz', $data_lang)) ? '' : $data_lang['oz'],
            'uz' => empty(array_key_exists('uz', $data_lang)) ? '' : $data_lang['uz'],
            'ru' => empty(array_key_exists('ru', $data_lang)) ? '' : $data_lang['ru'],
            'en' => empty(array_key_exists('en', $data_lang)) ? '' : $data_lang['en'],
        ];
        return $data;
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $model = SystemMessages::findOrFail($id);
            SystemMessageTranslation::where('id', $id)->delete();
            $model->delete();
            DB::commit();
        }catch (\Exception $exception) {
            DB::rollBack();
            return response()->json($exception->getMessage(), 422);
        }

        return response()->json('deleted', 204);
    }
}
