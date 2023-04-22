<?php
$plik = fopen("dane.txt", "a"); 

$imie = $_POST["imie"]; 
$nazwisko = $_POST["nazwisko"]; 

$linia = "Imię: " . $imie . " Nazwisko: " . $nazwisko . "\n"; # tworzenie linii tekstu
fwrite($plik, $linia); # Zapisz linię tekstu do pliku
fclose($plik); # Zamknij plik tekstowy

header('Location: zapisywaniedopliku.html'); # 'powrót' do strony głownej
exit;

?>