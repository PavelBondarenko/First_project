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
    function fibonacci($num) // $num - номер интересующего нас элемента
    {
        // общий случай. Идем от 3го до требуемого номера
        $pre_pre = 0; // элемент, скажем так, предпредыдущий.
        $current = 1; // текущий
        for ($i = 3; $i <= $num; $i++) {
            $pre = $current; // бывший текущий становится предыдущим
            $current = $pre + $pre_pre; // определяем текущий элемент
            $pre_pre = $pre; // бывший предыдущий становится предпредыдущим
        }
        return $current;
    }

    /*** Основная часть программы ***/
    $n = 1;
    echo fibonacci($n); // 0,1,1,2,3 - получается 3


    // function fib($n, $g)
    // {
    //     if ($n == 1 && $g == 2) {
    //         $f = 1;
    //         $f = fib($n - 1) + fib($g - 2);
    //     }
    //     return $f;
    // }
    // echo fib(1, 2);
    // ?>
</body>

</html>