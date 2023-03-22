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

    function pp($bok1, $bok2){
        $pp = $bok1 * $bok2;
        echo nl2br("Bok a=$bok1\nBok b=$bok2\nPole prostokata=$pp");
    }
        pp(4,5);
    ?>
</body>
</html>