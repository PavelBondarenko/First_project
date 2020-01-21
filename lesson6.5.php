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

    // $fp = fopen("file10.txt", "w+");
    // fwrite($fp, "Любая информация!");
    // fclose($fp);
    // $myarray = array(file('file10.txt'));
    // print_r($myarray);

    readfile("file10.txt");
    ?>
</body>

</html>