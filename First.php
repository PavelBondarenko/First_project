<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php echo 'Hello world!';
    $a =  5;
    $b = 1;
    $c = $a >> $b;
    echo "<br>";
    echo $c;
    $bool = TRUE; // логический
    $str = "foo"; //строковый
    $int = 12; // целочисленный
    echo gettype($bool); // выводит "boolean"
    echo gettype($str); // выводит "string"
    // Если целое число увеличить на четыре 
    if (is_int($int)) {
        $int += 4;
    }
    // Если $bool - это строка, вывести ее
    // (ничего не выводит)
    if (is_string($bool)) {
        echo   "Строка: $bool";
    }
    echo "<br>";
    $a = 1234;
    echo $a;
    echo "<br>";
    $a = -123;
    echo $a;
    echo "<br>";
    $a = 0123;
    echo $a;
    echo "<br>";
    $a = 0x1A;
    echo $a;
    echo "<br>";
    $a = 7E-10;
    echo $a * 1000000;
    echo "<br>";
    echo 'Чтобы вывести \' надо перед ней поставить \\';
    echo "<br>";
    $a = 3;
    echo "\$a = $a";
    ?>
</body>

</html>