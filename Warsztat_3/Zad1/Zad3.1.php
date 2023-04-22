<?php 

    require('funkcje.php');

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $znak = $_POST['znak'];
    $wynik = "";
        switch ($znak)
        {
            case "+":
                $wynik = dodawanie($n1, $n2);
            break;

            case "-":
                $wynik = odejmowanie($n1, $n2);
            break;

            case "*":
                $wynik = mnozenie($n1, $n2);
            break;

            case "/":
                $wynik = dzielenie($n1, $n2);
            break;
        }
echo $wynik;
?>