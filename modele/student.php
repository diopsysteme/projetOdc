<?php
$etudiants1 = array(
        array(
            "prenom" => "Aminata",
            "nom" => "Diop",
            "date_naissance" => "1998-05-15",
            "lieu_naissance" => "Dakar",
            "mail" => "aminata.diop@example.com",
            "numero" => "771234567",
            "referentiel" => "devweb",
            "matricule" => "P4_DEVWEB_2024_1",
            "statut" => 1,
            "sex" => "M",
            "promo" => "P2"
        ),
        array(
            "nom" => "Sow",
            "prenom" => "Mamadou",
            "date_naissance" => "1997-08-20",
            "lieu_naissance" => "Thiès",
            "mail" => "mamadou.sow@example.com",
            "numero" => "776543210",
            "referentiel" => "devdata",
            "matricule" => "P4_DEVDAT_2024_2",
            "statut" => 1,
            "sex" => "M",
            "promo" => "P2"
        ),
        array(
            "prenom" => "Fatou",
            "nom" => "Ndiaye",
            "date_naissance" => "1999-03-10",
            "lieu_naissance" => "Saint-Louis",
            "mail" => "fatou.ndiaye@example.com",
            "numero" => "778765432",
            "referentiel" => "refdig",
            "matricule" => "P4_REFDIG_2024_3",
            "statut" => 1,
            "sex" => "M",
            "promo" => "P5"
        ),
        array(
            "prenom" => "Oumar",
            "nom" => "Diallo",
            "date_naissance" => "1997-09-25",
            "lieu_naissance" => "Ziguinchor",
            "mail" => "oumar.diallo@example.com",
            "numero" => "778765432",
            "referentiel" => "devweb",
            "matricule" => "P4_DEVWEB_2024_6",
            "statut" => 1,
            "sex" => "M",
            "promo" => "P5"
        ),
        array(
            "prenom" => "Aïssatou",
            "nom" => "Niang",
            "date_naissance" => "1998-04-12",
            "lieu_naissance" => "Louga",
            "mail" => "aissatou.niang@example.com",
            "numero" => "776543219",
            "referentiel" => "devdata",
            "matricule" => "P4_DEVDAT_2024_7",
            "statut" => 1,
            "sex" => "M",
            "promo" => "P1"
        ),
        array(
            "prenom" => "Moussa",
            "nom" => "Camara",
            "date_naissance" => "1999-06-30",
            "lieu_naissance" => "Kolda",
            "mail" => "moussa.camara@example.com",
            "numero" => "771234568",
            "referentiel" => "refdig",
            "matricule" => "P4_REFDIG_2024_8",
            "statut" => 1,
            "sex" => "M",
            "promo" => "P1"
        ),
        array(
            "prenom" => "Rokhaya",
            "nom" => "Drame",
            "date_naissance" => "1996-12-15",
            "lieu_naissance" => "Tambacounda",
            "mail" => "rokhaya.drame@example.com",
            "numero" => "776543217",
            "referentiel" => "aws",
            "matricule" => "P4_AWS_2024_9",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P1"
        ),
        array(
            "prenom" => "Abdoulaye",
            "nom" => "Gueye",
            "date_naissance" => "2000-03-20",
            "lieu_naissance" => "Fatick",
            "mail" => "abdoulaye.gueye@example.com",
            "numero" => "777654320",
            "referentiel" => "hackeuse",
            "matricule" => "P6_HACKEUSE_2024_10",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P4"
        ),
        array(
            "prenom" => "Aminata",
            "nom" => "Traoré",
            "date_naissance" => "1997-08-10",
            "lieu_naissance" => "Dakar",
            "mail" => "aminata.traore@example.com",
            "numero" => "778765433",
            "referentiel" => "devweb",
            "matricule" => "P6_DEVWEB_2024_11",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P4"
        ),
        array(
            "prenom" => "Mamadou",
            "nom" => "Dabo",
            "date_naissance" => "1998-02-28",
            "lieu_naissance" => "Thiès",
            "mail" => "mamadou.dabo@example.com",
            "numero" => "776543211",
            "referentiel" => "devdata",
            "matricule" => "P6_DEVDAT_2024_12",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P4"
        ),
        array(
            "prenom" => "Fatou",
            "nom" => "Fall",
            "date_naissance" => "1999-11-05",
            "lieu_naissance" => "Saint-Louis",
            "mail" => "fatou.fall@example.com",
            "numero" => "771234569",
            "referentiel" => "refdig",
            "matricule" => "P6_REFDIG_2024_13",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P5"
        ),
        array(
            "prenom" => "Cheikh",
            "nom" => "Kane",
            "date_naissance" => "1996-10-18",
            "lieu_naissance" => "Kaolack",
            "mail" => "cheikh.kane@example.com",
            "numero" => "776543219",
            "referentiel" => "aws",
            "matricule" => "P6_AWS_2024_14",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P6"
        ),
        array(
            "prenom" => "Khady",
            "nom" => "Diallo",
            "date_naissance" => "2000-01-10",
            "lieu_naissance" => "Touba",
            "mail" => "khady.diallo@example.com",
            "numero" => "777654322",
            "referentiel" => "hackeuse",
            "matricule" => "P4_HACKEUSE_2024_15",
            "statut" => "actif",
            "sex" => "M",
            "promo" => "P6"
        )
    );
    
    
// writeCsv(FILE.$page,".csv",$etudiants1);
$etudiants=readCsv(FILE.$page,".csv");
// var_dump($etudiants);
if(isset($namePactive)){
    $etudiants=filterByprom($etudiants,$namePactive);

    if (isset($_POST["search"])) {
        $_SESSION['filtStu'] = $_POST["search"];
    }else{

    }

    $result = array();
if (isset($_POST["search"])) {
    $search = $_SESSION['filtStu'];
    foreach ($etudiants as $apprenant) {
        if (strpos(strtolower($apprenant["prenom"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["nom"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["mail"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["numero"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["referentiel"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["matricule"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["statut"]), strtolower($search)) !== false || 
             strpos(strtolower($apprenant["sex"]), strtolower($search)) !== false) 
             {
            $result[] = $apprenant;
        }
    }
}
 else {
        $result = $etudiants;
    }
    $eleByPage = 2;
    $pageEtu = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
    $totalPage = ceil(count($result) / $eleByPage);
    $eleDeb = ($pageEtu - 1) * $eleByPage;
    $etudiantsPage = array_slice($result, $eleDeb, $eleByPage);
}