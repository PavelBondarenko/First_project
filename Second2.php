<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- Альтернативный синтакисис -->
    <!-- <?php if ($a == 5) : ?>
        A is equal to 5
    <?php endif; ?> -->


    <!-- <?php $a = 5;
            if ($a == 5) { ?>
        A is equal to 5
    <?php }; ?> -->
    <?php
    // Цикл For
    // for ($i = 1; $i <= 10; $i++) {
    //     echo $i;
    //     echo '<br>';
    // }
    // echo "<br>";
    // for ($i = 1;; $i++) {
    //     if ($i > 10) {
    //         break;
    //     }
    //     echo $i;
    // echo "<br>";
    // $s = 0;
    // for ($i = 1; $i <= 10; $i++) {
    //     $s = $i + $s;
    // }
    // echo $s;
    // echo "<br>";
    // ARRAY
    // $arr = array("one", "two", "three");

    // foreach ($arr as $value) {
    //     echo "Value: $value<br />";
    // }



    // $arr = array("one", "two", "three");

    // foreach ($arr as $key => $value) {
    //     echo "Key: $key; Value: $value<br />";
    // }
    // echo "<br>";
    // $s = 0;
    // $arr = array(1, 2, 3, 5, 7);
    // foreach ($arr as $value) {
    //     $s = $s + $value;
    // }
    // echo $s;
    // echo "<br>"
    // WHILE
    /* пример 1*/
    //$i = 1;
    // while ($i <= 10) {
    //     echo $i++;
    // }
    /* ПРИМЕР "*/
    // $i= 1;
    // while ($i <= 10);
    //      echo $i;
    //     $i++;
    // endwhile;

    // $p = 1;
    // $i = 3;
    // do{
    //     $p = $p *$i;
    //     $i**2;
    // } while($i <= 12);
    // echo $p;
    // $i = 5;
    // switch ($i) {
    //     case 4;
    //         echo 4;
    //         break;
    //     case 5;
    //         echo 5;
    //         break;
    //     default;
    //         echo "\$i=$i";

    $i = 6;
    switch ($i) {
        case 0;
            echo 'Ноль';
            break;
        case 1;
            echo 'Лдин';
            break;
        case 2;
            echo 'два';
            break;
        case 3;
            echo 'Три';
            break;
        case 4;
            echo 'Четыре';
            break;
        case 5;
            echo 'Пять';
            break;
        case 6;
            echo 'Шесть';
            break;
        case 7;
            echo 'Семь';
            break;
        case 8;
            echo 'Восемь';
            break;
        case 9;
            echo 'Девять';
            break;
        default;
            echo "\$i=$i";
    }
    echo "Цвета $color $fruit";
    //Цвета
    include 'vars.php';
    echo "Цвета $color $fruit";
    // Цвета green apple
    ?>
</body>

</html>