<?php
function load(){
 
    $page = filter_input(INPUT_GET,filter_string_polyfill('page'));
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
    if(!file_exists($page)){
        //throw new \Exception("Opa, alguma coisa errada aconteceu");
        echo("Opa, alguma coisa errada aconteceu");
    }
    return $page;
}

function filter_string_polyfill(string $string): string
{
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
}