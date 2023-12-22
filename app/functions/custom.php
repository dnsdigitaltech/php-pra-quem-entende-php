<?php
session_start();
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

//GET or POST
function request(){
    $request = $_SERVER['REQUEST_METHOD'];
    if($request == 'POST'){
        return $_POST;
    }else{
        return $_GET;
    }
}

//Redirect
function redirect($target){
    return header("location:/?page={$target}");
}

function redirectToHome(){
    return header("location:/");
}