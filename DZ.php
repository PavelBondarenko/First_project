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
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;
    if ($a > $b && $a > $c && $a > $d && $a > $e) {
        echo $a;
    } else {
        if ($b > $a && $b > $c && $b > $d && $b > $e) {

            echo $b;
        }else {
            if($c > $a && $c > $b && $c > $d && $c > $e ){
                echo $c;
            }else {
                if($d > $a && $d > $b && $d > $c && $d > $e){
                    echo $d;
                }else {
                    if($e > $a && $e > $b && $e > $c && $e > $d){
                        echo $e;
                    }
                }
            }
        }
    }
    ?>
</body>

</html>