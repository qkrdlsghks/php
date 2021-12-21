<?php
function dump($value) {
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
}

$data = [
    ['name'=> '홍길동', 'age' => 34, 'job' => '도적'],
    ['name'=> '신사임당', 'age' => 57, 'job' => '가정주부'],
    ['name'=> '이순신', 'age' => 19, 'job' => '해적']
];

usort($data, function($a, $b) {
    return $a['age'] - $b['age'];
});

dump($data);




// function dump($value) {
//     echo "<pre>";
//     var_dump($value);    
//     echo "<pre>";
// }

// $arr = ["양영", "디지털", "홍길동"];
// dump($arr);
// echo array_shift($arr) . "<br>";
// echo array_unshift($arr, "성남", "분당") . "<br>";

// dump($arr);




// function dump($value) {
//     echo "<pre>";
//     var_dump($value);
//     echo "<pre>";
// }

// echo "<div style='width: 400px;'>";

// $fill_zero = array_fill(0, 5, 0);
// dump($fill_zero);
// $fill_banana = array_fill(3, 4, "banana");
// dump($fill_banana);

// echo "</div>";








// $keys = ["name", "age", "job"];
// $value = ["홍길동", 20 , "도적"];

// $arr = array_combine($keys, $value);


// echo "<pre>";
// var_dump($arr);
// echo "<pre>";








// $data = [1,2,3,4,5,6,7,8,9,10];
// $needle = "4";

// if(in_array($needle, $data)) {
//     echo "4는 배열안에 있습니다. <br>";
// }

// if(in_array($needle, $data, TRUE)) {
//     echo "타입까지 비교해도 4는 배열안에 있습니다. <br>";
// } else {
//     echo "타입 미스매치";
// }







// $human = [
//     [1,2,3,4,5],
//     [6,7,8,9,10],
//     [11,12,13,14,15],
//     [16,17,18,19,20]
// ];

// echo is_array($human);




// $human = [
//     [1,2,3,4,5],
//     [6,7,8,9,10],
//     [11,12,13,14,15],
//     [16,17,18,19,20]
// ];

// for($i = 0; $i < count($human); $i++) {
//     for($j = 0; $j < count($human[$i]); $j++) {
//         echo $human[$i][$j] . " ";
//     }
//     echo "<br>";
// }




// $human = [
//     'name' => '홍길동',
//     'age' => 20,
//     'job' => '도적'
// ];

// foreach($human as $key => $item) {
//     echo $key . ":" . $item . "<br>";
// }