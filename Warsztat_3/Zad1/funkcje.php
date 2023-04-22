<?php
    function dodawanie($n1, $n2) {
        return $n1 + $n2;
    }

    function odejmowanie($n1, $n2) {
        return $n1 - $n2;
    }

    function mnozenie($n1, $n2) {
        return $n1 * $n2;
    }

    function dzielenie($n1, $n2) {
        if ($n2 != 0) {
            return $n1 / $n2;
        } else {
            return "Nie można dzielić przez 0!!!!!";
        }
    }
?>