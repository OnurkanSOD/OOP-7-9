<?php
require_once 'Music.php';

// Maak een nieuw muziek item aan.
$music1 = new Music(name: 'Bach', genre: 'Klassiek', listen: 3);

// Toon de naam van het muziekitem.
echo $music1->getName();

// Gebruik var_dump om het object te tonen.
var_dump($music1);
?>
