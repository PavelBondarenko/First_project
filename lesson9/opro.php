<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .opros2 {
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
</style>

<body>
    <div class="opros2">
        <?php
        include('config.php');
        $vote = $_POST['voting'];

        $vot = file($file_name);

        $buf =  explode(" - ", $vot[$vote]);
        $buf[1] += 1;
        $vot[$vote] = implode(" - ", $buf) . "\n";

        file_put_contents($file_name, $vot);

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

            echo "<img src=\"Безымянный.png\" height=\"10\" width=" . ($g[1] / $s * 100) . "><br>";
        }

        ?>
    </div>
</body>

</html>