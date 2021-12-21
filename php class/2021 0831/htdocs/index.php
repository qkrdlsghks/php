<?php

$department = ['소프트웨어', '전자제어', '정보통신', '바이오학과'];
$i = 0;
while(count($department) > 0) {
    $item = array_pop($department);
    echo $item . "을 꺼냈습니다. <br>";
    
}


// $department = ['소프트웨어', '전자제어', '정보통신', '바이오화학'];
// echo $department[3];

// $human = ['name'=>'홍길동', 'age'=>20, 'male'=> true, 'job'=>'도적'];
// echo $human['name'];
// echo $human['age'];
// echo $human['male'];

// array_push($department,"새로운 학과");
// echo $department[4];

// array_push($department, "급식실");


// $newArr = array_splice($department, 2);
// echo "<pre>";
// var_dump($department);
// var_dump($newArr);  
// echo "</pre>";


// $str = "abcdefg";
// echo substr($str, 0, 3) . "<br>";
// echo substr($str, 4, 2) . "<br>";
// echo substr($str, -1, 1) . "<br>";
// echo substr($str, -2, 2) . "<br>";
// echo substr($str, -3) . "<br>";
// echo substr($str, 3) . "<br>";

// $str = "STR";
// $target = "S";
// $list = "N";
// $replaced = str_replace($target, $list, $str);
// echo $replaced;

// $str = "건강을 위해서라면 매일 야채와 과일, 물을 먹어야 한다.";
// $target = ["야채", "과일", "물"];
// $list = ["과자", "초콜렛", "치킨"];
// $replaced = str_replace($target, $list, $str);
// echo $replaced;


// $str = "건강을 위해서라면 매일 야채와 과일, 물을 먹어야 한다.";
// $target = ["야채", "과일", "물"];
// $list = ["과자", "초콜렛", "치킨"];
// $replaced = str_replace($target, $list, $str);
// echo $replaced;



// $list = ["a", "e", "i", "o", "u"];
// $replaced = str_replace($list, "", "Hello World");
// echo $replaced . "<br>";


// $str = "<a href='#'>네이버</a>";
// $replaced = str_replace("네이버", "구글", $str);
// echo $str . "<br>";
// echo $replaced . "<br>";



// $str = '안녕하세요';
// $str2 = 'abcde';
// $str3 = 'abcdeabcde';
// echo strlen($str) . "<br>";
// echo mb_strlen($str) . "<br>";
// echo strpos($str2, "d") . "<br>";
// echo strpos($str3, "d", 6) . "<br>";
// echo mb_strpos($str, "하") . "<br>";