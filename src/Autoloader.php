<?php


class Autoloader
{
    public function __invoke($className)
    {
        $filename = 'app/' . $className . '.php';
        if (file_exists($filename)) {
            include $filename;
        }
    }
}