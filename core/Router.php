<?php
namespace Core;


class Router
{
    private $routes;

    public function getTrack($routes, $uri)
    {
        // тут будет код
    }

    private function createPattern($path)
    {
        return "'#^" . preg_match('/:([^\]+)','/(?<$1>[^\]+)',$path) . "$#'";
    }
}