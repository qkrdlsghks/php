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
        $tmpName = $_FILES["upload"]["tmp_name"];
        $realName = $_FILES["upload"]["name"];

        if(!file_exists("upload")) {
            mkdir("upload");
        }

        move_uploaded_file($tmpName, "upload/" . $realName);
    ?>
</body>
</html>