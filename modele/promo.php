<?php
$promos=[
    [
        "name" => "P1",
        "dateDeb" => "2017-07-03",
        "dateFin" => "2023-07-03",
        "description" => "Promotion 1",
        "filieres" =>  "'Dev Web/Mobile,active',
                'Referent Digital,active',
                'Develeppement Data,active',
                'AWS,active',
                'Hackeuse,active'" ,
        "etat" => "inactive",
    ],
    [
        "name" => "P2",
        "dateDeb" => "2018-07-03",
        "dateFin" => "2023-07-03",
        "description" => "Promotion 2",
        "filieres" =>  "'Dev Web/Mobile,active',
                'Referent Digital,active',
                'Develeppement Data,active',
                'AWS,active',
                'Hackeuse,active'" ,
        "etat" => "inactive",
    ],
    [
        "name" => "P3",
        "dateDeb" => "2019-07-03",
        "dateFin" => "2023-07-03",
        "description" => "Promotion 3",
        "filieres" =>  "'Dev Web/Mobile,active',
                'Referent Digital,active',
                'Develeppement Data,active',
                'AWS,active',
                'Hackeuse,active'" ,
"etat" => "inactive",
    ],
    [
        "name" => "P4",
        "dateDeb" => "2020-07-03",
        "dateFin" => "2023-07-03",
        "description" => "Promotion 4",
        "filieres" =>  "'Dev Web/Mobile,active',
                'Referent Digital,active',
                'Develeppement Data,active',
                'AWS,active',
                'Hackeuse,active'" ,
"etat" => "inactive",

    ],
    [
        "name" => "P5",
        "dateDeb" => "2021-07-03",
        "dateFin" => "2023-07-03",
        "description" => "Promotion 5",
        "filieres" =>  "'Dev Web/Mobile,active',
        'Referent Digital,active',
        'Develeppement Data,active',
        'AWS,active',
        'Hackeuse,active'" ,
"etat" => "inactive",
    ],
    [
        "name" => "P6",
        "dateDeb" => "2023-07-03",
        "dateFin" => "2023-07-03",
        "description" => "Promotion 6",
        "filieres" =>  "'Dev Web/Mobile,active',
                'Referent Digital,active',
                'Develeppement Data,active',
                'AWS,active',
                'Hackeuse,active'" ,
"etat" => "inactive",
    ]
];


function readPromosFromCsv($file) {
    $fp = fopen($file . '.csv', 'r');

    $promos = array();

    while (($row = fgetcsv($fp)) !== false) {
        $promos[] = array(
            "name" => $row[0],
            "dateDeb" => $row[1],
            "dateFin" => $row[2],
            "description" => $row[3],
            "etat" => $row[4],
            "filieres" => $row[5],
        );
    }

    fclose($fp);

    return $promos;
}

$promos = readCsv(FILE.'promo',".csv");

// Afficher le tableau des filières
