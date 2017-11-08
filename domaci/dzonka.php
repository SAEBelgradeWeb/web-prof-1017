
<?php
// zadatak1
// $ja = 26;

// function checkage($ja) {

// 	if ($ja <= 25) {

// 		echo 'u shall not pass';

// 	} else {
// 		echo 'aj ulazi!';
// 	}
// }


// checkage (5);

?>



<?php
// zadatak2

// function cao ($ime='strangeru') {

// 	echo 'cao ' . $ime;
// }

// cao();


?>


<?php
// zadatak 3
// function faktorijal($broj){
// 	$rezultat = 1;
// 	for ($i=1; $i <= $broj; $i++) {
// 		$rezultat = $rezultat * $i;
// 	}

// 	return $rezultat;

// }

// echo faktorijal (5);

?>

<?php
//zadatak 4

// function kovertovanje ($value,$valuta){
// 	if ($valuta == 'eur') {
// 		return ($value * 120). 'din';
// 	}

// 	else if ($valuta == 'din'){

// 		return ($value / 120). 'eur';
// 	}

// }

// echo kovertovanje (12000,'din');

?>

//zadatak 5
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
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

?>


</body>
</html>