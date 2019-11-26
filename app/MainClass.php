<?php

namespace App;

class MainClass
{
    public static function last_word($sentence = ''): int
    {
        $last = explode(' ' , $sentence);

        return strlen(array_pop($last)) ?? 0;
    }

    public static function sql_date_format($dateStr)
    {
        $phpdate = strtotime( $dateStr );

        return date( 'Y-m-d H:i:s', $phpdate );
    }
}