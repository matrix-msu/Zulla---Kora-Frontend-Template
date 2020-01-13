<?php

$GLOBALS['api_routes'] = array(
    'api/testing' => array('functions.php', 'testingFunction'),
    'api/printEpisodes' => array('functions.php', 'printEpisodes'),
    'api/admin' => array('functions.php', 'admin'),
);

$GLOBALS['routes'] = array(
    '' => 'home.php',
    'search' => 'search.php',
    'about' => 'about.php',
    'cards' => 'components/cards.php',
    'carousel' => 'components/carousel.php',
    'drawers' => 'components/drawers.php',
    'fullRecord' => 'components/fullrecord.php',
    'tabs' => 'components/tabs.php',
    'modal' => 'components/modal.php',
    'admin' => 'admin.php',
	'searchbar-results' => '../modules/searchbar/searchbar-results.php'
);

if( !isset($_SERVER['HTTP_HOST']) ){
    define('CURRENT_VIEW', 'home.php');
    return;
}

//$location = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$location = "https://$_SERVER[HTTP_HOST]";
$path = parse_url($_SERVER['REQUEST_URI'])['path'];
$actualLink = $location . $path;
$currentFile = str_replace(BASE_URL, '', $actualLink);
if( substr($currentFile, -1) == '/' ){
    $currentFile = rtrim($currentFile,"/");
}

if( isset($GLOBALS['api_routes'][$currentFile]) ){
    $currentApiFile = $GLOBALS['api_routes'][$currentFile];
    include_once(BASE_FUNCTIONS_PATH.$currentApiFile[0]);
    echo $currentApiFile[1]();
    die;
}elseif( !isset($GLOBALS['routes'][$currentFile]) ){
    header('HTTP/1.0 404 Not Found');
    define('CURRENT_VIEW', '404.php');
}else{
    define('CURRENT_VIEW', $GLOBALS['routes'][$currentFile]);
}
