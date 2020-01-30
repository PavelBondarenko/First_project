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
    // $g = $_POST['voting'];;
    // echo $result = "$g\n";
    // $data = explode(';', "data.txt");
    // $data[$g]++;
    // implode($data);

    $i = $_POST['voting'];

    $arr = explode(';', file_get_contents('opros.csv'));
    $arr[$i]++;
    file_put_contents('opros.csv', implode(";", $arr));
    ?>
</body>

</html>