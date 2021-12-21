<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = "localhost";
        $dbname = "myblog";
        $charset = "utf8mb4";
        $user = "root";
        $passwd = "";
        $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

        $db = new PDO("mysql:host={$host}; dbname={$dbname};
                        charset={$charset}", $user, $passwd, $option);

        // $sql = "INSERT INTO users(id, name, password, level) VALUES('yydh07', '박인환박인환박인환박인환박인환박인환', '1234', 1)";

        $sql = "SELECT * FROM users";
        $result = $db->query($sql);
        $list = $result->fetchAll();

        // echo "<pre>";
        // foreach($list as $data) {
        //     // var_dump($data);
        //     echo $data->id;
        // }
        // echo "</pre>";
    ?>

    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>password</td>
            <td>level</td>
        </tr>
        <?php
        foreach($list as $data) {
        ?>
            <tr>
                <td><?=$data->id?></td>
                <td><?=$data->name?></td>
                <td><?=$data->password?></td>
                <td><?=$data->level?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>