<?php 

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

if (!function_exists('date_format2')) {
    function date_format2($date, $format = 'd M Y')
    {
        return Carbon::parse($date)->format($format);
    }
}

if (!function_exists('uc_first_only')) {
    function uc_first_only($str)
    {
        $string = trim($str);
        return ucfirst(strtolower($string));;
    }
}


if (!function_exists('welcome')) {
    function welcome($op, $sb = "something")
    {
        return $op . " " . $sb;
    }
}