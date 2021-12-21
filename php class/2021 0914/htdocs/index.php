<?php

require_once("Human.php");
require_once("lib.php");

$h1 = new Human();
$h1->setName("홍길동");
$h1->setHobby("도둑질");
$h1->setHobby("효자");


dump($h1);

$h2 = new Human();
$h2->setName("박인환");
$h2->setHobby("거인잡기");
$h2->setHobby("효자");

dump($h2);


if($h1->hasHobby("효자") && $h2->hasHobby("효자")) {
    echo "둘다 엄청난 효자";
}













// function testFunction(&$param1, $param2) {
//     $param1 = $param1 + 20;
//     $param2 = $param2 + 10;
//     return $param1 + $param2;
// };

// $a = 20;
// $b = 30;
// $result = testFunction($a, $b);
// echo $result . "<br>";
// echo $a . "<br>";
// echo $b . "<br>";










// function testFunction($param1, $param2) {
//     $param1 = $param1 + 20;
//     $param2 = $param2 + 10;
//     return $param1 + $param2;
// };

// $a = 20;
// $b = 30;
// $result = testFunction($a, $b);
// echo $result . "<br>";
// echo $a . "<br>";
// echo $b . "<br>";







// function testFunction($param1, $param2, $param3=100) {
//     $sum = $param1 + $param2 + $param3;
//     return $sum;
// };

// $result = testFunction(40, 50);
// echo $result . "<br>";

// $result = testFunction(40, 50, -20);
// echo $result . "<br>";

