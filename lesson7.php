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
    // file_put_contents(
    //     "file.txt",
    //     file_get_contents(
    //         "https://svyatoslav.biz/misc/psr_translation/#_PSR-0"
    //     )
    // );



    // Обрабатываем без секций
    $ini_array = parse_ini_file("file.ini");
    print_r($ini_array);

    // Обрабатываем с секциями
    $ini_array = parse_ini_file("file.ini", true);
    print_r($ini_array);
    ?>
</body>

</html>