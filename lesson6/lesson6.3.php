<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (is_dir("C:\ospanel\domains\Bondarenko")) {
        echo "Это папка!";
    } else {
        echo "Это не папка!";
    }

    echo "<br>";

    if (is_file("text2.txt")) {
        echo "Это файл!";
    } else {
        echo "Это не файл!";
    }

    // unlink('test123'); удаляет файлы

    rmdir('test123');




    ?>
</body>

</html>