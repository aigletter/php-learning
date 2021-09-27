<?php


class User extends Person
{
    public $name;

    public $age;

    public $weight;

    public function sayHello()
    {
        echo 'Hello world. I am ' . $this->getName() . PHP_EOL;
        echo 'Age is ' . $this->age . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __construct($name, $age = null)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo 'Object is removed' . PHP_EOL;
    }

    /*public function __toString()
    {
        return 'User object with name ' . $this->name . ' and age ' . $this->age . PHP_EOL;
    }*/

    public function __sleep()
    {
        return ['name'];
    }

    public function __wakeup()
    {
        $this->age = 50;
        $this->weight = 90;
    }

    public static function bla()
    {
        echo 'Static method with param ' . PHP_EOL;
    }
}