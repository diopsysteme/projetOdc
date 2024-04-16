<?php


    // $referentiels = [
    //     [
    //         "nom" => "Dev Web/Mobile",
    //         "etat" => "active",
    //         "promo" => "P1 P2 P3 P4 P5 P6"
    //     ],
    //     [
    //         "nom" => "Referent Digital",
    //         "etat" => "active",
    //         "promo" => "P1 P2 P3 P4 P5 P6"
    //     ],
    //     [
    //         "nom" => "AWS",
    //         "etat" => "active",
    //         "promo" => "P1 P2 P3 P4 P5 P6"
    //     ],
    //     [
    //         "nom" => "Hackeuse",
    //         "etat" => "active",
    //         "promo" => "P1 P2 P3 P4 P5 P6"
    //     ],
    //     [
    //         "nom" => "Develeppement Data",
    //         "etat" => "active",
    //         "promo" => "P1 P2 P3 P4 P5 P6"
    //     ]
    // ];
    // writeCsv(FILE.$page,".csv",$referentiels);

//search est le name de l'input sur la page principale 
$filieres=readCsv(FILE."referent",".csv");
$a=array();
foreach($filieres as $fil){
    if (stripos($fil["promo"], $_SESSION["promo"]["name"]) !== false)
    {
        $a[]=$fil;
    }
}
$referentielsFiltres = filt($a,$_POST['search']);



