<?php

require_once("config.php");
$dstefano = new Usuario();
$dstefano->loadbyId(3);

echo $dstefano;

?>

