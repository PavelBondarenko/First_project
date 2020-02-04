
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .opros2{
            width: 250px;
            justify-content: center;
            font-size: 24px;
            border: 1px solid;
            background-color: lightgray;
            padding: 25px;
            border-radius: 25px;
        }
        h1 {
            font-weight: normal;
            font-size: 25px;
        }
        
        .labell{
            background-color: white;
            border: 1px solid;
            border-radius: 10px;
            padding-left: 15px;
        }
    </style>
</head>

<body>
    <div class="opros2">
    <?php
    $ind = $_POST['voting'];
    $arr = file('votting.txt');
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents('votting.txt', $arr);
    // foreach ($arr as $value){
    //     echo"$value<br>";
    // }
    $sum = 0;
    $array = array(1, 2);
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }


  
    ?>
    <h1><?= $arr[0] ?></h1>
    <div class="labell">
    <?
    for ($i = 1; $i < count($arr); $i++) {
        $buf = explode(' - ', $arr[$i]);
        echo $buf[0] . " - " . round($buf[1] / $sum * 100) . "%";
        echo "  <img src='pixel.png' width='" . (100 * $buf[1] / $sum) . "' height='30'><br>";
    }
    ?>
    </div>
    </div>
</body>

</html>