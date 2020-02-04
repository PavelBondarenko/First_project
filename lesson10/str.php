<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="7">
    <title>Document</title>
</head>
<body>
<?php
    echo $count = file_get_contents("count.dat") + 1;
    file_put_contents("count.dat", "$count");
    ?>
</body>
</html>