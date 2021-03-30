<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Src\Http;
$headers = [
    'Access-Control-Allow-Origin: *',
    'Content-type: application/json; charset=UTF-8',
    'Access-Control-Allow-Headers: Content-Type',
    'Access-Control-Allow-Methods: GET,POST',
];
$data = [
    "links" => [
        "form" => "http://" . $_SERVER['HTTP_HOST'] . "/api/form.php"
    ]
];
//echo __DIR__ . $_SERVER['DOCUMENT_ROOT'];
Http::response(200, $data, $headers);
