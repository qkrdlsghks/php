<?php
// "<br>"



// include("lib.php");
require_once("lib.php");
$arr = [1,2,3,4,5,6,7];
dump($arr);




















// $myPage = file_get_contents("http://www.naver.com");
// echo $myPage;

// $file = file_get_contents("sample.txt");
// echo $file;














// $filename = "hello.txt";

// $file = fopen($filename, "w");
// if($file) {
//     fwrite($file, "Hello world! yydh!");
//     fclose($file);
// }else {
//     echo "파일 작성에 실패했습니다.";
// };
















// $filename = "sample.txt";

// if(file_exists($filename)) {
//     $file = fopen($filename, "r");
//     if($file) {
//         $size = filesize($filename);
//         echo "파일크기 : ${size} <br>";
//         $text = fread($file, $size);
//         echo $text;
//     } else {
//         echo "파일 열기에 실패했습니다.";
//     }
// }else {
//     echo "해당 파일이 존재하지 않습니다.";
// };














// echo date('Y-m-d') . "<br>";
// echo date('Y-m-d H:i:s') . "<br>";
// echo date('<y>, M, D') . "<br>";

// $time = strtotime("1989-06-29 07:30:18");
// echo date('Y-m-d H:i:s', $time) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("+10 day", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("+3 week", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("-3 month", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("+1 year", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("+10 day", strtotime("1989-06-29 07:30:18"))) . "<br>";
