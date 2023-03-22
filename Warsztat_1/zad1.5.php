<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function text($n1, $n2){
            echo '%'. $n2,' ' . $n1, '%$#';
    }

    $n1 = "napis1";
    $n2 = "napis2";

    text($n2, $n1);

    ?>
</body>
</html>