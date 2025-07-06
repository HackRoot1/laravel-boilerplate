<?php 

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

if (!function_exists('date_format2')) {
    function date_format2($date, $format = 'd M Y')
    {
        return Carbon::parse($date)->format($format);
    }
}


if (!function_exists('welcome')) {
    function welcome($op, $sb = "something")
    {
        return $op . " " . $sb;
    }
}