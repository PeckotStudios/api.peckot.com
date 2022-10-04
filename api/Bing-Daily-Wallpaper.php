<?php

require __DIR__.'/.lib/API.php';

use Pectics\API;

$api = new API();

$country = isset($_GET['country']) ? $_GET['country'] : 'cn';
$type = isset($_GET['type']) ? $_GET['type'] : 'json';
$abroad = isset($_GET['abroad']) ? $_GET['abroad'] : 'false';
$size = isset($_GET['size']) ? $_GET['size'] : '1920x1080';
$date = isset($_GET['date']) ? ( $_GET['date'] < 0 ? 0 : $_GET['date'] ) : 0;
$number = isset($_GET['number']) ? ( $_GET['number'] < 1 ? 1 : $_GET['number'] ) : 1;

$url = 'https://cn.bing.com';

switch($type) {
    case 'array':
        header('Content-type: text/array');
        break;
    case 'image':
        header('Content-type: image/jpeg');
        break;
    default:
        header('Content-type: application/json');
        break;
}

switch($size) {
    case '1920x1200':
        $size = '1920x1200';
        break;
    case '1366x768':
        $size = '1366x768';
        break;
    case '1280x768':
        $size = '1280x768';
        break;
    case '1024x768':
        $size = '1024x768';
        break;
    case '800x600':
        $size = '800x600';
        break;
    case '800x480':
        $size = '800x480';
        break;
    case '768x1280':
        $size = '768x1280';
        break;
    case '720x1280':
        $size = '720x1280';
        break;
    default:
        $size = '1920x1080';
        break;
}

if($abroad == 'true') {
    $url = 'https://www.bing.com';
}
if($number > 1 && $type == 'image') {
    $number = 1;
}
if($number > 8) {
    $number = 8;
}

$data = json_decode(file_get_contents('https://www.bing.com/HPImageArchive.aspx?cc='.$country.'&format=js&idx='.$date.'&n='.$number), true);
$images = array();
for($i=0;$i<$number;$i++) {
    $images[$i]['date'] = $data['images'][$i]['enddate'];
    $images[$i]['url'] = $url.str_replace('1920x1080', $size, $data['images'][$i]['url']);
    $images[$i]['copyright'] = $data['images'][$i]['copyright'];
    $images[$i]['copyrightlink'] = $data['images'][$i]['copyrightlink'];
    $images[$i]['hashcode'] = $data['images'][$i]['hsh'];
}

$result = $data == null ? $api->outputError(
    400,
    'Error: Data request failed!',
    'Confirm whether your parameters are correct.', 
    array()
    ) : $api->outputInfo(
        200,
        'Data request succeeded!',
        array('images'   => $images,)
        );
switch($type) {
    case 'array':
        print_r($result);
        break;
    case 'image':
        header('location:'.$result['images'][0]['url']);
        //imagejpeg(@imagecreatefromjpeg($result['images'][0]['url']));
        break;
    default:
        print_r(json_encode($result, JSON_NUMERIC_CHECK|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
        break;
}
?>