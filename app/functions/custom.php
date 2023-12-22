<?php
ini_set('display_errors','on');

function dd($dump){
    var_dump($dump);
    die();
}

//FILTER_SANITIZE_STRING
function filter_string_polyfill(string $string): string
{
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
}