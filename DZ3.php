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
    $arr = array(10, 3, 4, 5, 6, 28);

    function num($arr)
    {
        $max = $arr[0];
        for ($i = 1; $i <= count($arr); $i++) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
        return $max;
    }

    echo num($arr);
    ?>
</body>

</html>