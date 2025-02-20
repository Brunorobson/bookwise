<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require "views/template/app.php";
}

function dump(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
}
function dd(...$dump)
{
    dump(...$dump);
    exit();
}

function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}
