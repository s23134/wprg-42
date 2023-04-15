<?php
    $liczba = $_POST['liczba'];
    $licznik = 0;
    
    if ($liczba <= 0) {
        echo "<p>Wprowadzona wartość nie jest liczbą całkowitą dodatnią.</p>";
    } else {
        $pierwsza = true;
        for ($i = 2; $i <= sqrt($liczba); $i++) {
            $licznik++; 
            if ($liczba % $i == 0) {
                $pierwsza = false;
                break;
            }
        }
        if ($pierwsza) {
            echo "<p>$liczba jest liczbą pierwszą.</p>";
        } else {
            echo "<p>$liczba nie jest liczbą pierwszą.</p>";
        }
    }
    echo "<p>Liczba iteracji pętli: $licznik</p>";
?>