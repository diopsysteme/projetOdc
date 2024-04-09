<?php


    $referentiels = [
        [
            "nom" => "Dev Web/Mobile",
            "etat" => "active",
        ],
        [
            "nom" => "Referent Digital",
            "etat" => "active",
        ],
        [
            "nom" => "AWS",
            "etat" => "active",
        ],
        [
            "nom" => "Hackeuse",
            "etat" => "active",
        ],
        [
            "nom" => "Develeppement Data",
            "etat" => "active",
        ]
    ];

//search est le name de l'input sur la page principale 
    function filtrerReferentiels($referentiel) {
        return $referentiel['nom'] == $_POST["search"] || empty($_POST["search"]);
    }
    
    $referentielsFiltres = array_filter($referentiels, 'filtrerReferentiels');
    
    

