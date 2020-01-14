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
    // function foo()
    // {
    //     function bar()
    //     {
    //         echo "I don't exist until foo() is called.\n";
    //     }
    // }
    // /* Мы пока не можем обратиться к bar(),
    // поскольку она ещё не определена.*/
    // foo();
    // /* Теперь мы можем вызвать функцию
    //  */
    // bar();

    // $input = array(0, 1);
    // function takes_array($input)
    // {
    //     echo '$input[0] + $input[1] = ',
    //         $input[0] + $input[1];
    // }
    // takes_array($input);

    // $input = array(1, 2, 3, 4, 5);

    // function mul($arr)
    // {
    //     for ($i = 0; $i < count($arr); $i++) {
    //         $arr[$i] = $arr[$i] * 2;
    //     }
    //     return $arr;
    // }
    // print_r(mul([1, 2, 3, 4, 5]))
    $a = 5;
    $b = 9;
    $c = 4;
    $j = 7;

    function number($a, $b, $c, $j)
    {
        if ($a > $b &&  $a > $b) {
            $g = $a;
        } else {
            $g = $b;
        }
        if ($c > $a &&  $c > $b) {
            $g = $c;
        }
        if ($j > $a &&  $j > $b) {
            $g = $j;
        }
        return $g;
    }
    echo number($a, $b, $c, $j);
    ?>
</body>

</html>