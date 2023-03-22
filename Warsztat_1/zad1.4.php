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

    function oblicz($n1, $n2){
 
    $dodawanie = $n1 + $n2;
    $odejmowanie = $n1 - $n2;
    $mnozenie = $n1 * $n2;
    $modulo = $n1 % $n2;
        echo  nl2br("Wylosowane liczby naturalne to: $n1 i $n2\nDodawanie: $dodawanie\nOdejmowanie: $odejmowanie\nMnozenie: $mnozenie\nDzielenie modulo: $modulo");
    }
    $n1 = rand(0, 100);
    $n2 = rand(0, 100);
    oblicz($n1, $n2);
   
    ?>
</body>
</html>