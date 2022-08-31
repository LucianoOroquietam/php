<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="limiteTabla.php" method="GET">

	<label for="">Ingrese Limite de tabla de multiplicar</label>
	<input type="number" name="limit" id="">

	<input type="submit" >


	</form>


	
</body>
</html>





<?php 

$limit = 20;


echo "<table text-align:center; border=5>";

echo "<thead> <tr><th></th>";

for ($tabla=1; $tabla<=$limit  ; $tabla++) {
	
	echo "<td>$tabla</td>";
	
}

echo "</thead>";

 
echo "<tr>";
for ($multiplicador=1; $multiplicador <=$limit ; $multiplicador++) {
	echo "<tr> <td> $multiplicador </td>"; 
	for ($multiplicando=1; $multiplicando <=$limit ; $multiplicando++) { 
		echo "<td>" . $multiplicador*$multiplicando . "</td>";
	}
	echo "</tr>";

}
echo "</tr>";


echo "</table>";

?>