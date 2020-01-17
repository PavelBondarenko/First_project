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
        $max = $arr[0];
        for ($i = 1; $i <= count($arr); $i++) {
            if ($arr[$i] > $max); {
                $max = $arr[$i];
            }
        }
        return $max;
    }

    echo mul($arr);
    ?>
</body>

</html>