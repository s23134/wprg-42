<?php
	$liczba = $_POST['liczba'];
		
	if ($liczba <= 0) {
		echo "<p>Wprowadzona wartość nie jest liczbą całkowitą dodatnią.</p>";
	} else {
		$pierwsza = true;
		for ($i = 2; $i <= sqrt($liczba); $i++) {
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
?>