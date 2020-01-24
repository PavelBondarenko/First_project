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
    $f = "HELOO WORLD";
    $f = lcfirst($f);
    echo $f;
    echo "<br>";


    $f = 'HELOO WORLD';
    $f = strtolower($f);
    echo $f;
    echo "<br>";

    $f = 'hello world';
    $f = strtoupper($f);
    echo $f;
    echo "<br>";

    $f = 'hello world';
    $f = ucwords($f);
    echo $f;
    echo "<br>";


    $a = "привет мир";
    echo mb_strtoupper($a);
    echo "<br>";

    $b = " HELLO";
    echo str_shuffle($b);
    echo "<br>";

    ?>
</body>

</html>