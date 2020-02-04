<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $fp = fopen("file1.txt", "w+");
    fwrite($fp, "GOODD");
    fclose($fp);
    copy("file1.txt", "file2.txt");
    unlink('file1.txt');
    ?>
</body>
</html>