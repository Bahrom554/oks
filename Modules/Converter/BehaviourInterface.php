<?php

namespace Modules\Converter;

interface BehaviourInterface
{
    /**
     * @param LatinTokenizer $text
     * @return object | null
     */
    public function next($text);
}
