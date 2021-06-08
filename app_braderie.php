<?php
if(!defined('FROM_INDEX')) {
    echo 'Appel direct interdit...';
    exit;
}
//------------------------------

require_once 'particulier.php';
require_once 'restaurateur.php';
require_once 'vendeurpro.php';

/////////////////////////////////////
/// Affichage et Calcul des taxes ///
/////////////////////////////////////

$all = [
    new Particulier (45, 5.0, "Tommy"),
    new Particulier (25, 7.5, "Martine"),
    new Restaurateur(1, 50, "La belle frite", 7485659812, 10, true),
    new Restaurateur(2, 50, "Le saucisson des landes", 7539514560, 7, false),
    new Restaurateur(3, 50, "Le poisson doré", 2581473215, 11, true),
    new VendeurPro  (4, 50, "Le jean en folie", 3214569870, 13),
    new VendeurPro  (4, 50, "Pulls et Chemises d’inde", 8476257629, 8)
];

$alltaxe = 0.0;
foreach ($all as $brad) {
    echo '<div class="bg-light border border-dark">';
    echo $brad->afficheInfos().'<br>';
    echo "Taxe à régler :  <span class='text-info font-weight-bold'>".$brad->calcTaxe().' €</span><br>';
    $alltaxe += $brad->calcTaxe();
    echo '</div><br>';
}
echo "<h2>Taxe Totale : <span class='text-warning font-weight-bold'>".$alltaxe ." €</span></h2>";
