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

    print_r($_POST);
    echo $_POST['num1']*$_POST['num2'];
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num1'] * $_POST['num2'];
    file_put_contents('text.txt', "$a * $b = $c". "\n", FILE_APPEND);

    // $c = $_POST['num1'];
    // $t = $_POST['num2'];
    // echo $a= "$c - $t"." = ".($c - $t)."\n";

    // $fp = fopen("calc.txt", "a+");
    // fwrite($fp, $a);
    // fclose($fp);
    ?>
      
</body>
</html>