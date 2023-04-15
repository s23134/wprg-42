<?php 
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $znak = $_POST['znak'];
    $wynik = "";
        switch ($znak)
        {
            case "+":
                $wynik = $n1 + $n2;
            break;

            case "-":
                $wynik = $n1 - $n2;
            break;

            case "*":
                $wynik = $n1 * $n2;
            break;

            case "/":
                $wynik = $n1 / $n2;
            break;
        }
echo $wynik;
?>
