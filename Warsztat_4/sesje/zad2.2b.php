<?php
session_start();

if (isset($_SESSION['loggedIn'])) {
    $username = $_SESSION['username'];
    echo "Witaj, $username!";
}
?>
<form action="logout.php" method="post">
    <input type="submit" value="Wyloguj się">
</form>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezerwacja hotel</title>
</head>
<body>
<form id="myForm" METHOD="POST" ACTION="zad2.2b.php">

    <fieldset>
        <legend>Formularz</legend>
        <fieldset>
        <legend>Liczba osób</legend>
        <label for="liczba_osob">Wybierz liczbę osób:</label>
        <select name="liczba_osob">
            <option value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	        <option value="4">4</option>
        </select>
        </fieldset>
        <fieldset>
            <legend>Dane rezerwującego</legend>
            <div>
                <label for="imie">Podaj imię</label>
                <input type="text" name="imie" placeholder="Imię" required>
            </div>
            <div>
                <label for="nazwisko">Podaj nazwisko</label>
                <input type="text" name="nazwisko" placeholder="Nazwisko" required>
            </div>
            <div>
                <label for="email">Podaj adres e-mail</label>
                <input type="email" name="email" placeholder="email@xyz.pl" required>
</div>
<div>
<label for="nrtelefonu">Podaj numer telefonu</label>
<input type="tel" id="nrtelefonu" name="nrtelefonu"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="Format: XXX-YYY-ZZZ" required>
</div>
<div>
<label for="adres">Podaj adres</label>
<input type="text" name="adres" placeholder="Adres" required>
</div>
<div>
<label for="kartakredytowa">Podaj nr karty kredytowej</label>
<input type="text" name="kartakredytowa" maxlenght="26"  placeholder="26 DIGITS" required>
</div>
</fieldset>
<fieldset>
<legend>Informacje dodatkowe</legend>
<div>
<label for="lozkodziecko">Czy jest potrzebne dostawienie łóżka dla dziecka?</label>
<input type="radio" name="lozkodziecko" value="Tak">Tak
<input type="radio" name="lozkodziecko" value="Nie" checked>Nie
</div>
<div>
<p>Opcjonalnie:</p>
<input type="checkbox" id="popielniczka" name="udogodnienia[]" value="popielniczka">
<label for="popielniczka">Popielniczka</label>
</div>
<div>
<input type="checkbox" id="sejf" name="udogodnodnienia[]" value="sejf">
<label for="sejf">Sejf</label>

</div>
<div>
<input type="checkbox" id="klimatyzacja" name="udogodnienia[]" value="klimatyzacja">
<label for="klimatyzacja">Klimatyzacja</label>
</div>
<div>
<input type="submit" value="Wyślij">

<button type="button" onclick="clearForm()">Wyczyść formularz</button>

</div>

</fieldset>
</fieldset>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $liczba_osob = $_POST['liczba_osob'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $nrtelefonu = $_POST['nrtelefonu'];
    $adres = $_POST['adres'];
    $kartakredytowa = $_POST['kartakredytowa'];
    $lozkodziecko = $_POST['lozkodziecko'];
    $udogodnienia = isset($_POST['udogodnienia']) ? $_POST['udogodnienia'] : [];
    echo "<h2>Podsumowanie rezerwacji</h2>";
echo "<p>Liczba osób: $liczba_osob</p>";
echo "<p>Imię: $imie</p>";
echo "<p>Nazwisko: $nazwisko</p>";
echo "<p>Email: $email</p>";
echo "<p>Numer telefonu: $nrtelefonu</p>";
echo "<p>Adres: $adres</p>";
echo "<p>Numer karty kredytowej: $kartakredytowa</p>";
echo "<p>Łóżko dla dziecka: $lozkodziecko</p>";

if (!empty($udogodnienia)) {
    echo "<p>Wybrane udogodnienia:</p>";
    echo "<ul>";
    foreach ($udogodnienia as $udogodnienie) {
        echo "<li>$udogodnienie</li>";
    }
    echo "</ul>";
}
}
?>

<script>
    function clearForm() {
        document.getElementById('myForm').reset();
    }
</script>
</body>
</html>
