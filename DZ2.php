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
    $money = 2000;
    $proc = 11.5;
    $term = 1;

    // for (; $term <= 14; $term++) {
    //     $money = $money + ($money * ($proc / 12 / 100);
    // }
    // echo $money;
    // do {
    //     $money = $money + ($money * ($proc / 12 / 100));
    //     $term++;
    // } while (
    //     $term <= 14
    // );
    // echo $money;
    while ($term <= 14) {
        $money = $money + ($money * ($proc / 12 / 100));
        $term++;
    }
    echo $money;

    ?>
</body>

</html>