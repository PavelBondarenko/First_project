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
    // МАССИВЫ
    $arr = array("foo" => "bar", 12 => true);

    echo $arr["foo"]; //bar
    echo $arr[12]; //1
    echo "<br>";

    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));
    echo $arr["somearray"][6]; //5
    echo "<br>";

    echo $arr["somearray"][13]; //9
    echo "<br>";

    echo $arr["somearray"]["a"]; //42]
    echo "<br>";

    $ddd = array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
    echo $ddd[5];
    echo "<pre>";
    print_r($arr);
    "</pre>";
    echo "<br>";

    $arr = array(5 => 1, 12 => 2);
    $arr[] = 56;
    echo "<pre>";
    print_r($arr); //
    "</pre>";
    echo "<br>";

    $arr["x"] = 42;
    echo "<pre>";
    print_r($arr); // Это добовляет элемент к массиву новый
    "</pre>";
    echo "<br>";

    unset($arr[5]); // Это удаляет элемент из массива
    echo "<pre>";
    print_r($arr);
    "</pre>";
    echo "<br>";

    unset($arr); //Это удаляет массив полностью
    echo "<pre>";
    print_r($arr);
    "</pre>";
    echo "<br>";

    // Тип object (объекты)
    class foo
    {
        function do_foo()
        {
            echo "Doing foo";
        }
    }
    $bar = new foo;
    $bar->do_foo();
    echo "<br>";
    // Оператор if
    $a = 5;
    $b = 4;
    if ($a > $b) {
        echo "a больше, чем b";
        $b = $a;
    }
    echo "<br>";

    // else
    $a = 26;
    $b = 24;
    if ($a > $b) {
        echo "a is greater than b";
    } else {
        echo " a is NOT greater than b";
    }
    echo "<br>";
    // elseifelse if
    $a = 45;
    $b = 34;
    if ($a > $b) {
        echo "a is bigger than b";
    } elseif ($a == $b) {
        echo " a is equal to b";
    } else {
        echo "a is smaller than b";
    }
    ?>
</body>

</html>