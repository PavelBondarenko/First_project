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

    // function fibonacci($num)
    // {
    //     $pre_pre = 0;
    //     $current = 1;
    //     for ($i = 1; $i <= $num; $i++) {
    //         $pre = $current;
    //         $current = $pre + $pre_pre;
    //         $pre_pre = $pre;
    //     }
    //     return $current;
    // }
    // $n = 4;
    // echo fibonacci($n);


    function fib($n)
    {
        $f = [0, 1];
        for ($i = 1; $i < $n; $i++) {
            $f[] = $f[$i] + $f[$i - 1];
        }
        return $f;
    }
    echo "<pre>";
    print_r(fib(4));

    ?>
</body>

</html>