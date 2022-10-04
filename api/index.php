<?php

require __DIR__.'/.lib/API.php';

use Pectics\API;

$api = new API();

header('Content-type: application/json');

print_r(json_encode(
    $api->outputError(
        400,
        'Error! Please select the correct API.',
        'Refer to docs.peckot.com to learn more.',
        array()
    ), JSON_NUMERIC_CHECK|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES
));