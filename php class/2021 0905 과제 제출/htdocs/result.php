<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="get">
        <?php
            $money = $_GET['money'];
            $drink = $_GET['drink'];

            if($drink == 1100) {
                echo "덜컹! 사이다가 나왔습니다";
            }else if($drink == 1200) {
                echo "덜컹! 환타가 나왔습니다";
            }else if($drink == 1300) {
                echo "덜컹! 콜라가 나왔습니다";
            }else {
                echo "코드오류";
            };

            $num = $money - $drink;
            echo "<br>잔돈 : " . $num . "원";
            // echo " <button type='submit' name='drink' value='$num'>다른 음료 고르기</button>"
        ?>
    </form>
</body>
</html>