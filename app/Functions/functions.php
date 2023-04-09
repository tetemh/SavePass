<?php
if (!function_exists('ed')) {
    function ed(...$var)
    {
        foreach ($var as $args) {
            echo ($args);
        }
        die;
    }
}

if (!function_exists('genToken')) {
    function genToken($length = 16)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}

if(!function_exists('call_api')){
    function call_api (array $args) {
        return response()->json($args);
    }
}
