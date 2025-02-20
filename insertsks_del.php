<html>
<head>
</head>
<body>

<p><a href="index.php">Wróć do indeksu</a></p>

<h1>Łączenie PHP do SQL przy pomocy mysqli strukturalnie (Sposób polecany na egzaminie)</h1>

<a href="https://www.w3schools.com/php/php_mysql_connect.asp">dokumentacja w3schools</a>
<p>Dokumentacja funkcji z biblioteki mysqli, która jest dołączona do kadego egzaminu INF.03</p>
 <img width="500px" src="mysqli.png"></img>

<form action="insertsks_del.php" method="post" >

<h3>Dopisz zawodnika</h3>
    Imię: <input type="text" name="imie"><br>
	Nazwisko: <input type="text" name="nazwisko"><br>
	Klasa: <input type="text" name="klasa"><br>
    <input type="submit" value="zapisz" name="submitDodaj">
</form>


<?php

	$conn = mysqli_connect("localhost", "root", "", "sks");

	
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	

	if(isset($_POST['submitDodaj'])){
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$klasa = $_POST['klasa'];

		$q_dodaj = "INSERT INTO zawodnicy (imie, nazwisko, klasa)
			VALUES ('$imie', '$nazwisko', '$klasa')";
		
		if (mysqli_query($conn, $q_dodaj)) {
			echo "Dodano rekord";
		} else {
			echo "Error: " . $q_dodaj . "<br>" . mysqli_error($conn);
		}
	}


	$q_wypisywanie = "SELECT * FROM zawodnicy";
	$result = mysqli_query($conn, $q_wypisywanie);

	if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		
		echo <<< END
			<tr>
				<th>ID</th>
				<th>Imię</th>
				<th>Nazwisko</th>
				<th>Klasa</th>
				<th>Data urodzenia</th>
				<th>Wzrost</th>
    		</tr>
			<!--
			<tr>
				<td> $row['id'] </td>
				<td> $row['imie'] </td>;
 				<td> $row['nazwisko'] </td>;
				<td> $row['klasa'] </td>;
				<td>" $row['dataurodzenia'] </td>;
				<td> $row['wzrost'] </td>;
			</tr> -->
	END;

	}
	} else {
		echo "<tr><td colspan='6'>Brak zapisanych zawodników</td>"
	}

	mysqli_close($conn);
	
/*obsługa bazy przy pomocy zapytań strukturalnych, 
dokumentacje do tego sposobu znajdziecie w dokumentacji 
do egzaminu - na końcu, np: https://arkusze.pl/zawodowy/inf03-2022-styczen-egzamin-zawodowy-praktyczny.pdf , 

ale też znajduje się na w3schools

INSERT https://www.w3schools.com/php/php_mysql_insert.asp
DELETE: https://www.w3schools.com/php/php_mysql_delete.asp
SELECT https://www.w3schools.com/php/php_mysql_select.asp

*/ 


// dodawanie zawodnika

// usuwanie zawodnika

// edytowanie zawodnika - na 6

?>

<h3>Aktualnie zapisani zawodnicy</h3>
<ol>
<?php
	//wypisanie aktualnie zapisanych użytkowników z opcją edytowania
?>
</ol>


</body>
</html>