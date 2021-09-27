<?php

include 'autoloader.php';

/*function __autoload($className)
{
    $filename = 'src/' . $className . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}*/

$test = new Test();
$test->hello();

echo 'Echo';




/*//echo $user;
//unset($user->blablabla);
//unset($user);*/

//$array = ['a' => 'b'];
//$obj = (object) $array;
//$obj->hello = 'world';

/*$json = json_encode($user);
$object = json_decode($json);

$serialized = serialize($user);
$unserialized = unserialize($serialized);*/


//$user2->sayHello();



//$a = 1;
//
//function increment(&$a)
//{
//    $a = 10;
//}
//
//increment($a);
//
//echo $a . PHP_EOL;

////////////////////////////////

/*function changeObject(&$object)
{
    $object->name = 'Ivan';
}

$user = new User();
$user->name = 'Petr';

changeObject($user);

echo $user->name;*/


exit();