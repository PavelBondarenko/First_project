<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="opro.php" method="POST">
        <?php
        $votin =  file("ovros.csv");
        ?>
        <h1><?= $votin[0] ?></h1>

        <?php
        for ($i = 1; $i < count($votin); $i++) {
            $buf =  explode(" - ", $votin[$i])[0];
            echo "<label><input type='radio' name='voting' value='$i'>" . "$buf<br></label>\n";
        }
        ?>
        <input type="submit" value="ok">
    </form>
</body>

</html>