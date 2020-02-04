<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .opros {
            width: 250px;
            justify-content: center;
            font-size: 24px;
            border: 1px solid;
            background-color: lightgray;
            padding: 25px;
            border-radius: 25px;


        }

        input {
            background-color: blue;
            color: white;
            border-radius: 10px;
            padding: 8px;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 7px;
            
        }

        h2 {
            font-weight: normal;
            font-size: 25px;
        }
        .labell{
            background-color: white;
            border: 1px solid;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="opros">
        <form action="opros2.php" method="POST">
            <?php
            $arr = file('opros.csv');
            ?>
            <h2><?= $arr[0] ?></h2>
            <div class="labell"><?php
                                for ($i = 1; $i < count($arr); $i++) {
                                    $buf = explode(" - ", $arr[$i])[0];
                                    echo "<label><input type='radio' name='voting' value='$i'>$buf</label><br> \n";
                                }

                                ?>
            </div>
            <input type="submit" value="VOTE">
        </form>
    </div>
</body>

</html>