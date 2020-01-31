<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="rectangle"></div>
    <?php
    $vote = $_POST['voting'];

    $vot = file('ovros.csv');

    $buf =  explode(" - ", $vot[$vote]);
    $buf[1] += 1;
    $vot[$vote] = implode(" - ", $buf) . "\n";

    file_put_contents("ovros.csv", $vot);

    // foreach ($vot as $key => $value) {
    //     echo "$value<br>";
    // }



    $s = 0;

    for ($i = 1; $i < count($vot); $i++) {
        $s = $s + explode(" - ", $vot[$i])[1];
    }


    for ($i = 1; $i < count($vot); $i++) {
        $g = explode(" - ", $vot[$i]);
        echo $g[0] . "-" . round(($g[1] / $s * 100), 2) . "%";

        echo "<img src=\"Безымянный.png\" height=\"10\" width=".($g[1]/ $s * 100).">". "<br>";
    }

    ?>
</body>

</html>