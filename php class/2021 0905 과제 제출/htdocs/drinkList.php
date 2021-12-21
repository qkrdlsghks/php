<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .none {
            display: none;
            width: 0;
            height: 0;
        }
    </style>
</head>

<body>
    <form action="./result.php" method="get">
        <?php
        $money = $_GET['money'];
        echo $money . "원을 넣었습니다" . "<br>";
        $drink = [
            ['사이다', 1100],
            ['환타', 1200],
            ['콜라', 1300],
        ];
        echo "<input class='none' type='number' name='money' value='$money'> <br>";

        for ($i = 0; $i < count($drink); $i++) {
            for ($j = 0; $j < count($drink[$i]); $j++) {
                if ($j == 1) {
                    if ($drink[$i][$j] <= $money) {
                        $num = $drink[$i][$j];
                        echo $drink[$i][$j] . "원 <button type='submit' name='drink' value='$num'>음료 선택</button>";
                    }else {
                        echo "구매불가";
                    };
                }else {
                    echo $drink[$i][$j] . " ";
                };
            };
            echo "<br>";
        };

        ?>
    </form>
</body>

</html>