<?php
namespace Core;

error_reporting(E_ALL);
ini_set('display_errors','on');

function autoLoader($class){
    preg_match('#(.+)\\\\(.+)$#',$class,$match);
    var_dump($match);
    $ds = DIRECTORY_SEPARATOR;
    $nameSpace = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\',$ds,$match[0]);
    var_dump($nameSpace);
    require_once($nameSpace.$ds.$match[2]);
}
spl_autoload_register('Core\autoLoader');
//$a = new Test();
$b = new Route();
