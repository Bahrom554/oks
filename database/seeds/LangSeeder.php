<?php

use Illuminate\Database\Seeder;
use Modules\Translations\Entities\Langs;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = [
            ['name' => 'Узбек', 'code' => 'uz'],
            ['name' => 'Русский', 'code' => 'ru'],
            ['name' => 'English', 'code' => 'en'],
        ];

        foreach ($langs as $lang) {
            Langs::create([
                'name' => $lang['name'],
                'code' => $lang['code'],
                'status' => 1
            ]);
        }
    }
}
