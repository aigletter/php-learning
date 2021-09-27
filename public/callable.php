<?php

include 'src/Person.php';
include 'src/User.php';
include 'src/Student.php';
include 'src/Callback.php';


function call(callable $callback)
{
    if (true) {
        return;
    }
    // ....
    $callback();
    // ...
}

//////////////////////////////////



// 1. Функции
function test()
{
    echo 'Function' . PHP_EOL;
}
//call( test() );
call( 'test' );
//test();

// 2. Методы
$user = new User('Ivan');
call([$user, 'sayHello']);
//call(['User', 'bla', 1]);
//User::bla('Hello');
//$user->sayHello();

// 3. Ананимные функции
/*(function () {
    echo 'Anonimous function' . PHP_EOL;
})();*/

// 4. Invokable обьекты
$invokable = new Callback();
//$invokable();


$array = [
    1,
    2,
    3
];
function filter($item)
{
    return $item > 2;
}
$result = array_filter($array, 'filter');

exit();