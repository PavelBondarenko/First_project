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
    $f=fopen("count.dat","r"); 
    $count=fgets($f);
    $count += 1;
    echo "$count";
    fclose($f);
    $c = fopen("count.dat", "w+");
    fwrite($c,$count);
    fclose($c);

    /* 
    $a = file("counter.txt");
    $a[0] = $a[0] + 1;
    $c = fopen("counter.txt", "w+);
    fwrite($c, $a[0]);
    redfile("counter.txt");
    */
    ?>
</body>

</html>