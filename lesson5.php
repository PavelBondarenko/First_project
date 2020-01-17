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
    function num($n)
    {
        $f = 1;
        for ($i = 1; $i <= $n; $i++) {
            $f = $f * $i;
        }
        return $f;
    }
    echo num(2);
    echo "<br>";
    echo num(3);
    echo "<br>";
    echo num(4);
    echo "<br>";
    echo num(5);


    ?>
</body>

</html>