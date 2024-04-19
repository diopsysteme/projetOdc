<?php 

//     $totalPage=ceil(count($etudiants)/$eleByPage);

//     if($pageEtu<1 || $pageEtu>$totalPage)
//         header("Location:?page=$page&pageAff=1");
//     $eleDeb = ($pageEtu-1)*$eleByPage;
//     $etudiantsPage = array_slice($listeFiltre, $eleDeb, $eleByPage);


// $eleByPage=5;
// $pageEtu = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
// $totalPage=ceil(count($etudiants)/$eleByPage); //ceil() fonction qui arrondit par exee
// // echo($pageEtu<1 || $pageEtu>$totalPage);
// if($pageEtu<1 || $pageEtu>$totalPage)
// header("Location:?page=$page&pageAff=1");
// $eleDeb = ($pageEtu-1)*$eleByPage;
// $etudiantsPage = array_slice($etudiants, $eleDeb, $eleByPage);
$extention="csv";
function filterByprom($tab1, $promo) {
    $etudiants = array();
    foreach ($tab1 as $tab) {
      
        if (stristr($promo,$tab["promo"]) !== false) {
            $etudiants[] = $tab;
        }
    }
    return $etudiants;
}
function printPromo($descriptPactive) {
?>
    <a href="?page=dashboard"><span class="colorG"> <?=$descriptPactive?></span></a>
    <?php }
function readCsv($file, $extension)
{
    $fp = fopen($file . $extension, "r");
    $datas = [];

    if ($fp !== false) {
        // Lire la première ligne pour obtenir les noms des champs
        $headers = fgetcsv($fp);

        while (($row = fgetcsv($fp)) !== false) {
            // Combiner les noms de champs avec les données de la ligne actuelle
            $rowData = array_combine($headers, $row);
            $datas[] = $rowData;
            
        }
        
        return $datas;
    } else {
        die("Fichier introuvable");
    }
}
function readhCsv($file) {
    $fp = fopen($file, "r");
    if ($fp !== false) {
        // Lire la première ligne pour obtenir les noms des champs
        $headers = fgetcsv($fp);
        $data = array();
        while (($row = fgetcsv($fp)) !== false) {
            // Combiner les noms de champs avec les données de la ligne actuelle
            $rowData = array_combine($headers, $row);
            $data[] = $rowData;
        }
        fclose($fp);
        return $data;
    } else {
        die("Fichier introuvable");
    }
}


function writeCsv($file, $extention, $data)
{
    $fp = fopen($file . $extention, 'wa');

    // Écrire les noms de colonnes dans le fichier CSV
    fputcsv($fp, array_keys($data[0]));

    // Écrire les données dans le fichier CSV
    foreach ($data as $row) {
        fputcsv($fp, $row);
    }

    fclose($fp);
}

function addCsv($file, $extension, $data)
{
    $fp = fopen($file . $extension, 'wa'); 
    foreach ($data as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
}

    
function writePromosToCsv($file, $promos) {
    $fp = fopen($file . '.csv', 'w');

    // Parcourir chaque promotion
    foreach ($promos as $promo) {
        $rowData = array(
            $promo["name"],
            $promo["dateDeb"],
            $promo["dateFin"],
            $promo["description"],
            $promo["etat"],
            $promo["filieres"],
        );

        fputcsv($fp, $rowData);
    }

    fclose($fp);
}
function filt($tab,$val)
{
    $tabFilt=array();
    foreach ($tab as $ta){
        if (stripos($val, $ta["nom"]) !== false || $val=="")
        {
            
            $tabFilt[]=$ta;
        }
    }
    return $tabFilt;
}
function convdate($dateAnglais) {
    $timestamp = strtotime($dateAnglais);
    
    $jours_fr = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
    $mois_fr = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    
    $jour = date('w', $timestamp);
    $jour_fr = $jours_fr[$jour];
    $jour_num = date('j', $timestamp);
    $mois = date('n', $timestamp);
    $mois_fr = $mois_fr[$mois];
    $annee = date('Y', $timestamp);
    
    $dateFrancais = $jour_fr . ' ' . $jour_num . ' ' . $mois_fr . ' ' . $annee;
    
    return $dateFrancais;
}
    
    
    ?>



    
