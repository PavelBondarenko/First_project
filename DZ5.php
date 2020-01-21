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
    $f = fopen("Counter.txt", "a+");
    $count = fgets($f);
    $count++;
    echo "Количество посещений: $count";
    ?>
</body>

</html>