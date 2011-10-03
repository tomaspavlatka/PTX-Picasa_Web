<?php
/**
 * Author: Tomas Pavlatka [tomas.pavlatka@gmail.com]
 * Created: Oct 3, 2011
 */

date_default_timezone_set('Europe/Prague');
header('Content-Type: text/html; charset=utf-8'); 

require_once './classes/PicasaWeb.php';

$userId = 'tomas.pavlatka';

$picasaObj = new PTX_PicasaWeb($userId);
$params = array(
    'photos' => true,
);
$albums = $picasaObj->albums($params);

echo '<pre>';
    print_r($albums);
echo '</pre>';

