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

    function plus(&$string)
    {
        $string .= ' + Петя';
    }
    $str = 'Ира';

    plus($str);
    echo $str; // Выведет 'Ира + Петя
    echo "<br>";
    ////////////////////////////////////////////////////


    function makecoffee($type = "cappuccino")
    {
        return "Making a cup of $type.\n";
    }
    echo makecoffee();
    echo makecoffee("espresso");
    ////////////////////////////////////////////////

    $a = 1; /* Глобальная область видимости */
    function Test()
    {
        echo $a; /*ссылка на перменную локальной области видимости*/
    }
    Test();
    echo "<br>";
    ///////////////////////////////////////////////

    $a = 1;
    $b = 2;

    function Sum()
    {
        global $a, $b;

        $b = $a + $b;
    }

    sum();
    echo $b;
    echo "<br>";
    /////////////////////////////////////////////////////
    function Test2()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    Test2();
    echo $a;
    echo "<br>";
    Test2();
    echo $a;


    ?>
</body>

</html>