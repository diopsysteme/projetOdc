<?php 

    $totalPage=ceil(count($etudiants)/$eleByPage);

    if($pageEtu<1 || $pageEtu>$totalPage)
        header("Location:?page=$page&pageAff=1");
    $eleDeb = ($pageEtu-1)*$eleByPage;
    $etudiantsPage = array_slice($listeFiltre, $eleDeb, $eleByPage);


$eleByPage=5;
$pageEtu = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
$totalPage=ceil(count($etudiants)/$eleByPage); //ceil() fonction qui arrondit par exee
// echo($pageEtu<1 || $pageEtu>$totalPage);
if($pageEtu<1 || $pageEtu>$totalPage)
header("Location:?page=$page&pageAff=1");
$eleDeb = ($pageEtu-1)*$eleByPage;
$etudiantsPage = array_slice($etudiants, $eleDeb, $eleByPage);

