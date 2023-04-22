<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
    <h1>Podsumowanie rezerwacji</h1>
    <?php
    # Sprawdzenie czy plik csv istnieje, jeśli nie to zostanie utworzony z nagłówkiem
    if(!file_exists("dane.csv")) {
        $csvHeader = "liczba_osob;imie;nazwisko;email;nrtelefonu;adres;kartakredytowa;lozkodziecko;udogodnienia\n";
        $file = fopen("dane.csv", "a");
        fwrite($file, $csvHeader);
        fclose($file);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba_osob = $_POST["liczba_osob"];
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $email = $_POST["email"];
        $nrtelefonu = $_POST["nrtelefonu"];
        $adres = $_POST["adres"];
        $kartakredytowa = $_POST["kartakredytowa"];
        $lozkodziecko = $_POST["lozkodziecko"];
        $udogodnienia = $_POST["udogodnienia"];

        # Zapis danych do pliku CSV jako nowy rekord
        $csvData = "$liczba_osob;$imie;$nazwisko;$email;$nrtelefonu;$adres;$kartakredytowa;$lozkodziecko;";
        if(is_array($udogodnienia) && !empty($udogodnienia)) {
             $csvData .= implode(", ", $udogodnienia);
        }
        $csvData .= "\n";

        # Otwarcie pliku CSV i zapis danych
        $file = fopen("dane.csv", "a");
        fwrite($file, $csvData);
        fclose($file);

        echo "<p><strong>Liczba osób:</strong> $liczba_osob</p>";
        echo "<p><strong>Imię:</strong> $imie</p>";
        echo "<p><strong>Nazwisko:</strong> $nazwisko</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Numer telefonu:</strong> $nrtelefonu</p>";
        echo "<p><strong>Adres:</strong> $adres</p>";
        echo "<p><strong>Numer karty kredytowej:</strong> $kartakredytowa</p>";
        echo "<p><strong>Łóżko dla dziecka:</strong> $lozkodziecko</p>";

        if(is_array($udogodnienia) && !empty($udogodnienia)) {
            echo "<p><strong>Udogodnienia:</strong> ";
            foreach($udogodnienia as $udogodnienie) {
                echo "$udogodnienie, ";
            }
            echo "</p>";
        }
    }
?>

</body>
</html>