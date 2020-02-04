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
    // $arr = explode(':', file_get_contents('file3.txt'));
    // $arr[2]++;
    // print_r($arr);
    // file_put_contents('file3.txt', implode(':', $arr));

$arr = array("P", "r", "i", "v", "e", "t");
for ($i=0; $i <= count($arr) ; $i++) { 
    echo ord($arr[$i]);
    echo "<br>";
}   

    ?>
</body>

</html>