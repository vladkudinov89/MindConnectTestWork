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

    public static function extract_string($str)
    {
        $res = [];

        preg_match_all("/\[(.*?)]/" ,$str , $result );

        if(!empty($result[1])){
            foreach ($result[1] as $extract) {
                $res[] = $extract;
            }
            return implode($res , ',');
        } else {
            return '""';
        }
    }
}