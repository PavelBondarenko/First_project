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
    $arr = array(1, 3, 4, 5, 6, 7);
    function mul($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] = $arr[$i] > $i;
            $g = $arr[$i];
        }
        return $arr;
    }
    ?>
</body>

</html>