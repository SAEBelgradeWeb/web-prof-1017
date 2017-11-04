<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Zadaci</title>
</head>
<body>
	
	<?php

		// 1.ZADATAK
		// Napisi jednostavnu funkciju koja ehuje "Zdravo strance" ako joj se ne posalje ni jedan parametar, a ako se posalje jedan parametar ($ime) da ehuje "Zdravo Ime".


		function greetings($name = "Stranger"){
			echo "Hello" . " " . $name;
		}

		greetings("Bogdan");
		echo "<br>";
		greetings();

		echo "<br>";
		echo "<br>";
		echo "<br>";

		// 2.ZADATAK
 		// Napisi funkciju koja prima jedan parametar (broj godina) i u zavisnosti od broj a godina ispisuje poruke 
		// - 0 - 18 - zabranjeno ispijanje alkohola
		// - 19 - 65 - dozvoljeno napijanje
		// - preko 65 ne preteruj sa alkoholom

		function restriction($age){
			if( $age < 18 ) {
				return "Zabranjeno ispijanje alkohola";
			}else if ( $age >= 18 && $age <= 65 ){
				return "Dozvoljeno napijanje";
			}else if ( $age > 65 ){
				return "Ne preteruj sa alkoholom";
			}
		}

		echo restriction(14);
		echo "<br>";
		echo restriction(45);
		echo "<br>";
		echo restriction(70);

		echo "<br>";
		echo "<br>";
		echo "<br>";

		// 3.ZADATAK
		// Napisi funnkciju koja uzima bilo koji broj i ***vraca*** faktorijel od tog broja. Faktorijel je npr. od broja 5 = 5 * 4 * 3 * 2 * 1 tj 120


		// $i++
		function factorial($number){
			$rezultat = 1;
			for( $i = 1; $i <= $number; $i++){
				$rezultat *= $i;
			}
			return $rezultat;
		}

		echo factorial(5);

		echo "<br>";
		echo "<br>";
		echo "<br>";

		// $j--
		function factorial_one($number_one){
			$rezultat_one = 1;
			for( $j = $number_one; $j > 0; $j--){
				$rezultat_one *= $j;
			}
			return $rezultat_one;
		}

		echo factorial_one(7);

		echo "<br>";
		echo "<br>";
		echo "<br>";

		// Rekurzivno
		function factorial_two($number_two){
			if ( $number_two == 1){
				return 1;
			}else{
				return $number_two * factorial_two($number_two - 1);
			}
		}

		echo factorial_two(5);

		echo "<br>";
		echo "<br>";
		echo "<br>";

		// 4.ZADATAK 
		// Napisi fuinkciju koja prima array dana u nedelji sa temperaturom (u pitanju je asocijativni array). Funkcija zatim treba da odstampa na ekranu tabelu koja izgleda ovako

		// -----------------
		// Ponedeljak | 20C
		// Utorak     | 15C
		// -----------------

		$days = [
			'Ponedeljak' => '11&#8451;',
			'Utorak' => '23&#8451;',
			'Sreda' => '5&#8451;',
			'Cetvrtak' => '15&#8451;',
			'Petak' => '17&#8451;',
			'Subota' => '13&#8451;',
			'Nedelja' => '8&#8451;',

		];
	?>

	<table border="1">
		<tr>
			<th>Days</th>
			<th>Temperature</th>
		</tr>
		<?php foreach ($days as $key => $temp) : ?>
		<tr>
			<td><?= $key?></td>
			<td><?= $temp?></td>
		</tr>
	<?php endforeach; ?>
	</table>

	<?php 

	echo "<br>";
	echo "<br>";
	echo "<br>";

	// 5.ZADATAK
	// Napisi funkciju koja prima iznos i zeljenu valutu (EUR ili RSD) i koja vraca konvertovano u tu drugu valutu

	function converter($amount,$currency){
		if ( $currency == "EUR" ){
			return ($amount * 120) . "DIN"; 
		}else if ( $currency == "DIN"){
			return ($amount / 120) . "EUR";
		}
	}

	echo converter(100,"EUR");
	echo "<br>";
	echo converter(12000,"DIN");

	?>



</body>
</html>