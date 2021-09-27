<?php

include 'src/Person.php';
include 'src/User.php';
include 'src/Student.php';
include 'src/Callback.php';

/**
 * Функция принимающая и вызывающая колбек
 */
function call(callable $callback)
{
    // ....
    $callback();
    // ...
}

//////////////////////////////////

// Варианты вызываемых сущностей и их передача как колбеков

// 1. Функции
function test()
{
    echo 'Function' . PHP_EOL;
}
// Обычный вызов
//test();
// Передача в виде колбека
call( 'test' );


// 2. Методы
$user = new User('Ivan');

// Обычный вызов
//$user->sayHello();
//User::bla('Hello');

// Передача в виде колбеков
// 2.1. Метод обьекта
call([$user, 'sayHello']);
// 2.2. Статический метод класса
call(['User', 'bla']);


// 3. Ананимные функции
// Обычный вызов - так обычно никто вызывает )))
/*(function () {
    echo 'Anonimous function' . PHP_EOL;
})();*/
// Передача в виде колбека
call(function () {
    echo 'Anonimous function' . PHP_EOL;
});

// 4. Invokable обьекты - обекты с описанным магическим методом __invoke
$invokable = new Callback();
// Обычный вызов
//$invokable();
// Передача в виде колбека
call($invokable);



// Передача колбеков во встроенные функции PHP
// Все следующие варианты будут работать и делать одно и то же

$array = [1, 2, 3];

function filter($item)
{
    return $item > 2;
}
$result = array_filter($array, 'filter');

// или так

$result = array_filter($array, function ($item) {
    return $item > 2;
});

// или так

class ArrayFilter
{
    public function simpleFilter($item)
    {
        return $item > 2;
    }

    public static function staticFilter($item)
    {
        return $item > 2;
    }
}
$result = array_filter($array, [new ArrayFilter(), 'simpleFilter']);

// или так

$result = array_filter($array, [ArrayFilter::class, 'staticFilter']);

// или так

class InvokableFilter
{
    public function __invoke($item)
    {
        return $item > 2;
    }
}
$result = array_filter($array, new InvokableFilter());

exit();