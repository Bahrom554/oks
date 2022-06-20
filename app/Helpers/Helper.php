<?php


namespace App\Helpers;


use Modules\Converter\LatinBehaviour;
use Modules\Converter\LatinTokenizer;
use Modules\Converter\TextInterpreter;

class Helper
{
    public function translateToLatin($plain)
    {
        $textInterpreter = new TextInterpreter();
        $textInterpreter->setTokenizer(new LatinTokenizer());
        $textInterpreter->addBehavior(new LatinBehaviour([
            'бугунги' => 'bugungi',
            'жароҳат' => 'jarohat',
            'туфайли' => 'tufayli',
            'Патрик' => 'Patrik'
        ]));

        $matches = array();
        preg_match('/<a([^"\'>]+)href=["\']?([^"\'>]+)["\']?/', $plain, $matches);

        if (sizeof($matches) > 0) {
            $url = $matches[2];

            str_replace($url, urlencode($url), $plain);

        }
        try {

            $translated = $textInterpreter->process($plain)->getText();
            return $translated;

        } catch (\Exception $e) {
            return $plain;
        }
    }
}