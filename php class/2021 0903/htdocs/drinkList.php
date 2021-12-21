<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./result.php" method="get">

    </form>
    <?php
    $money = $_GET['money'];
    echo $money . "원을 넣었습니다" . "<br>";
    $drink = [
        ['사이다', 1100],
        ['환타', 1200],
        ['콜라', 1300],

    ];

    for ($i = 0; $i < count($drink); $i++) {
        for ($j = 0; $j < count($drink[$i]); $j++) {
            if ($j == 1) {
                if ($drink[$i][$j] <= $money) {
                    echo $drink[$i][$j] . " ";
                } else {
                    echo "구매불가";
                }
            } else {
                echo $drink[$i][$j] . " ";
            }
        };
        echo "<br>";
    };

    ?>
</body>

</html>