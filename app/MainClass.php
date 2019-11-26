<?php

namespace App;

class MainClass
{
    public static function last_word($sentence = ''): int
    {
        $last = explode(' ' , $sentence);

        return strlen(array_pop($last)) ?? 0;
    }
}