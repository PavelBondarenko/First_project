<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="rect.css">
</head>

<body>
    <div class="rectangle" style="width: <?= $_GET['a']?>px; height: <?= $_GET['b']?>px; background-color: <?= $_GET['color']?>"></div>
    <?php
    // print_r($_GET);
    $first = $_GET['a'];
    $second = $_GET['b'];
    $area = $_GET['a'] * $_GET['b'];
    echo  " Площадь прямоугольника = $area ." ;
    ?>
</body>

</html>