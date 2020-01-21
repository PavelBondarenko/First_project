<?php
    header("Content-Type: text/plan");
    $html = file("https://www.php.net/manual/ru/function.file.php");

    foreach ($html as $key => $value) {
        echo $key . '|' . $value;
    }
    ?>