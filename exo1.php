<?php 

$nombre1 = rand(1, 100);
$nombre2 = rand(1, 100);

echo "Nombre 1 : " . $nombre1 . "<br>";
echo "Nombre 2 : " . $nombre2 . "<br>";

$somme = $nombre1 + $nombre2;
$exponentiel = $nombre1 ** $nombre2;
$difference = $nombre1 - $nombre2;
$produit = $nombre1 * $nombre2;
$modulo = $nombre1 % $nombre2;
$division = $nombre1 / $nombre2;
$carré1 = $nombre1 ** 2;
$carré2 = $nombre2 ** 2;

echo "Somme : " . $somme . "<br>";
echo "Exponentiel : " . $exponentiel . "<br>";
echo "Différence : " . $difference . "<br>";
echo "Produit : " . $produit . "<br>";
echo "Modulo : " . $modulo . "<br>";
echo "Division : " . $division . "<br>";
echo "Carré de Nombre 1 : " . $carré1 . "<br>";
echo "Carré de Nombre 2 : " . $carré2 . "<br>";

?>