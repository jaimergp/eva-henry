<?php
// Devolver lista de apuntados en un regalo

$apuntados = file("apuntados.txt");


if( isset($_POST['nombre']) ) {
	$nombre = $_POST['nombre'];
	array_push($apuntados, "#$nombre\n");

	$fp = fopen("apuntados.txt", "w");
	$fw = fwrite($fp, implode("", $apuntados));
	fclose($fp);
}

echo "<ul>";
foreach($apuntados as $apuntado) {
	if (0 !== strpos($apuntado, '#')) {
		echo "<li>$apuntado</li>";
	}
}
echo "</ul>";

?>