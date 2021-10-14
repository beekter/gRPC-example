<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/service/SearchService.php';

use service\SearchService;
use Version1\Request;

$request = new Request();
$request->mergeFromString(file_get_contents('php://input'));

if (($_SERVER['PATH_INFO'] ?? "") === '/search') {
    $response = (new SearchService())->searchFav($request);

    echo str_replace("\n", "<br>", $response->serializeToString());

    return;
}

echo 'Hello! Please send search request to /search<br>';

return;

