<?php


class Callback
{
    public function __invoke()
    {
        echo 'I am invokable object' . PHP_EOL;
    }
}