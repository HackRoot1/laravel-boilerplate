<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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

if (!function_exists('breakString')) {
    function breakString($str)
    {
       $string = str_replace(' ', '_', strtolower(trim($str)));
        return ucfirst($string);
    }
}

if (!function_exists('userHasPermission')) {
    function userHasPermission($permission)
    {
        return Auth::check() && Auth::user()->hasPermission($permission);
    }
}
