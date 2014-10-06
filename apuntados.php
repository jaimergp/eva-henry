<?php
// Devolver lista de apuntados en un regalo

require_once("Spyc.php");
$data = spyc_load_file('regalos.txt');
$apuntados = $data[$_GET['id']];
echo "<ul>";
foreach($apuntados as $apuntado) {
	echo "<li>$apuntado</li>";
}
echo "</ul>";

?>