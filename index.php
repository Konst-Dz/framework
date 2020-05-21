<?php
namespace Core;

error_reporting(E_ALL);
ini_set('display_errors','on');

function autoLoader($class){
    preg_match('#(.+)\\\\(.+)$#',$class,$match);
    var_dump($match);
    $lower = strtolower($match[1]);
    $ds = DIRECTORY_SEPARATOR;
    $nameSpace = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . str_replace('\\',$ds,$lower);
    $path = $nameSpace . $ds . $match[2] . '.php';
    require_once($path);
    var_dump($path);
}
spl_autoload_register('Core\autoLoader');

$routes = require $_SERVER['DOCUMENT_ROOT'] . 'project/config/routes.php';

$router = new Route();
$track = $router->getTrack($routes,$_SERVER['REQUEST_URI']);