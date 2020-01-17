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
    function fk($n)
    {
        if ($n == 0) {
            $f = 1;
        } else {
            $f = fk($n - 1) * $n;
        }
        return $f;
    }
    echo fk(0);
    echo "<br>";
    echo fk(1);
    echo "<br>";
    echo fk(2);
    echo "<br>";
    echo fk(3);
    echo "<br>";
    echo fk(4);
    echo "<br>";
    ?>
</body>

</html>