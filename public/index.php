<?php 
include "/var/www/html/projet/config/bootsrap.php";
include "/var/www/html/projet/config/helper.php";
?>
<link rel="stylesheet" href="<?=CSS?>">
<?php 

session_start();
//  session_destroy();  
if(!isset($_SESSION["user"])){
    include("/var/www/html/projet/template/login.html.php");
    if(isset($_POST["login"])){
        unset($_SESSION["error"]["password"]) ;
        unset($_SESSION["error"]["mail"]) ;
    unset($_SESSION["error"]["all"]) ;

        $username = $_POST["mail"];
        $password = $_POST["password"];
        if(empty($username) || empty($password)){
            $_SESSION["error"]["all"] = "Veuillez remplir tous les champs";
            if(empty($_POST["password"])) {
                $_SESSION["error"]["password"] = "Veuillez remplir ce champ";
            }
            if(empty($_POST["mail"])) {
                $_SESSION["error"]["mail"] = "Veuillez remplir ce champ";
            }
            header("Location:/projet/public/index.php?page=dashboard");
        } else {
            $etudiants = readCsv(FILE."student",".csv");
            foreach($etudiants as $user) {
                if($user['passwd'] == $password && $user['mail'] == $username) {
                    $_SESSION["user"] = $user;
                    echo "Password changed";
            header("Location:/projet/public/index.php?page=dashboard");

                    break;

                }
            }
            $_SESSION["error"]["all"] = "Login et/ou mot de passe incorrect(s)";
            header("Location:/projet/public/index.php?page=dashboard");
        }
    }
}
else
    {
        if(isset($_POST["decon"]))
        {
            session_destroy();
            header("Location:/projet/public/index.php?page=dashboard");
        }
        include "/var/www/html/projet/modele/promo.php";
        include "/var/www/html/projet/modele/referent.php";
        
        
        $page= $_REQUEST["page"]??"";
         if($_REQUEST["page"])
        {
        $page = $_REQUEST["page"];
        
        function isInFile($file, $page) {
            return in_array($page, $file);
        }
        
        if(isInFile($file, $page))
        {
            if(isset($_POST["addFiliere"])){
                $_SESSION["errord"]["file"]= "";
                $_SESSION["errord"]["desc"]= "";
                    $_SESSION["errord"]["lib"]= "";
                    $_SESSION["errord"]["img"]= "";
                if(empty($_POST["libellé"])|| empty($_POST["description"])){
                    if(empty($_POST["libellé"]))
                    $_SESSION["errord"]["lib"]="ce champ est requis";
                    else $_SESSION["errord"]["lib"]= "";
                if(empty($_POST["description"]))
                $_SESSION["errord"]["desc"]="ce champ est requis";
                else $_SESSION["errord"]["desc"]= "";
        
                }else
                {
                    
                    $etat = $_POST["etat"];
                    $idPromo=$_SESSION['promo']['name'];
                        if($etat==""){
                            $idPromo="inactif";
                        }
                    $_SESSION["error"]= "";
                    $found=0;
                    $filieres=readCsv(FILE."referent",".csv");
                    foreach($filieres as $ref){
                            if($_POST["libellé"]==$ref["nom"] && $idPromo!='inactif' && $_SESSION['promo']['name']==$ref["promo"]){
                            $found=1;
                            break;
                        }
                    }
                    if($found== 1){
        
                        $_SESSION["errord"]["file"]= "ce filiere exite deja";
                    }else
                    {
        
                        $libelle = $_POST["libellé"];
                        $description = $_POST["description"];
                        $img = $_FILES["img"]["name"];
                        $idPromo=$_SESSION['promo']['name'];
                        if($etat==""){
                            $idPromo="inactif";
                        }
        
                        if ($img == "")
                            $img = "default.jpeg";
                        
                            $img_tmp = $_FILES["img"]["tmp_name"];
                            $extension = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                            $extensionsAutorisees = array("jpg", "jpeg", "png", "gif");
                            
                            if(in_array($extension, $extensionsAutorisees)) {
                                echo "Le fichier est une image avec l'extension : $extension";
                             $upload_directory = IMG2 ."referentiel/";
                            if (!file_exists($upload_directory)) {
                                echo "creating temporary";
                                mkdir($upload_directory, 777, true);
                            }
        
                            if (move_uploaded_file($img_tmp, $upload_directory . $img)) {
                                echo "Image téléchargée avec succès.";
                            } else {
                                echo "Une erreur est survenue lors du téléchargement de l'image.";
                            }
                                $newRef = array(
                                    "nom" => $libelle,
                                    "etat" =>"active" ,
                                    "promo" => $idPromo ,
                                    "description" =>$description ,
                                    "image" =>$img
                                );
        
                                $allfilieres=readCsv(FILE.$page,".csv");
                                $allfilieres[]=$newRef;
                                writeCsv(FILE.$page,".csv",$allfilieres);
                            } else {
                                
                                $_SESSION["errord"]["img"]= "selectionnez une image svp" ;
                                echo "bakhoule ";
                            }
                            
                        
        
                     
                    }
                }
        
            }
            include "/var/www/html/projet/template/partial/header.html.php";
        include "/var/www/html/projet/modele/referent.php";
        
            if(isset($_SESSION["promo"])){
                if(isset($_POST["activePromo"])){
                    $promo = $_POST["activePromo"];
                    foreach($promos as &$prom){ 
                    if($prom["name"] == $promo) {
                        $prom["etat"] = "active";
                        $_SESSION['promo'] = $prom;
                        $_SESSION["filieres"]=$referentielsFiltres;
                        
                        echo "found";
                    } else {
                        $prom["etat"] = "inactive";
                    }
                }
                writeCsv(FILE."promo",".csv",$promos);
                header("Location:");
        
                }
        
                foreach($referPactive as $refer){
                    echo "<br/>";
                }
            }
           if(!isset($_SESSION["promo"])) {
                foreach($promos as $prom){
                    if($prom["etat"]=="active")
                    {
                        $_SESSION['promo'] = $prom;
                        $_SESSION["filieres"]=$referentielsFiltres;
                        break;
                    }
                }
            header("Location:");
        
            }
            $referentielsFiltres=$_SESSION['filieres'];
            $namePactive=$_SESSION['promo']['name'];
            $descriptPactive=$_SESSION['promo']['description'];
           
            if ($page=="present") {
        include "/var/www/html/projet/modele/referent.php";
                
                include MODELE."$page.php";
                include TEMPLATE."$page.html.php";
            }elseif ($page=="student") {
                include MODELE."$page.php";
                include TEMPLATE."$page.html.php";
            }else{
                include MODELE."$page.php";
                include TEMPLATE."$page.html.php";
        
            }
            print_r($_SESSION["promo"]);
            include "/var/www/html/projet/template/partial/footer.html.php";
        }else{
        
            include TEMPLATE."error.html.php";
        }

}
    }
?>


<!-- 
header("Location:");

include "/var/www/html/projet/modele/promo.php";
include "/var/www/html/projet/modele/referent.php";


$page= $_REQUEST["page"]??"";
 if($_REQUEST["page"])
{
$page = $_REQUEST["page"];

function isInFile($file, $page) {
    return in_array($page, $file);
}

if(isInFile($file, $page))
{
    if(isset($_POST["addFiliere"])){
        $_SESSION["errord"]["file"]= "";
        $_SESSION["errord"]["desc"]= "";
            $_SESSION["errord"]["lib"]= "";
            $_SESSION["errord"]["img"]= "";
        if(empty($_POST["libellé"])|| empty($_POST["description"])){
            if(empty($_POST["libellé"]))
            $_SESSION["errord"]["lib"]="ce champ est requis";
            else $_SESSION["errord"]["lib"]= "";
        if(empty($_POST["description"]))
        $_SESSION["errord"]["desc"]="ce champ est requis";
        else $_SESSION["errord"]["desc"]= "";

        }else
        {
            
            $etat = $_POST["etat"];
            $idPromo=$_SESSION['promo']['name'];
                if($etat==""){
                    $idPromo="inactif";
                }
            $_SESSION["error"]= "";
            $found=0;
            $filieres=readCsv(FILE."referent",".csv");
            foreach($filieres as $ref){
                    if($_POST["libellé"]==$ref["nom"] && $idPromo!='inactif' && $_SESSION['promo']['name']==$ref["promo"]){
                    $found=1;
                    break;
                }
            }
            if($found== 1){

                $_SESSION["errord"]["file"]= "ce filiere exite deja";
            }else
            {

                $libelle = $_POST["libellé"];
                $description = $_POST["description"];
                $img = $_FILES["img"]["name"];
                $idPromo=$_SESSION['promo']['name'];
                if($etat==""){
                    $idPromo="inactif";
                }

                if ($img == "") 
                    $img = "default.jpeg";
                
                    $img_tmp = $_FILES["img"]["tmp_name"];
                    $extension = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                    $extensionsAutorisees = array("jpg", "jpeg", "png", "gif");
                    
                    if(in_array($extension, $extensionsAutorisees)) {
                        echo "Le fichier est une image avec l'extension : $extension";
                     $upload_directory = IMG2 ."referentiel/";
                    if (!file_exists($upload_directory)) {
                        echo "creating temporary";
                        mkdir($upload_directory, 777, true);
                    }

                    if (move_uploaded_file($img_tmp, $upload_directory . $img)) {
                        echo "Image téléchargée avec succès.";
                    } else {
                        echo "Une erreur est survenue lors du téléchargement de l'image.";
                    }
                        $newRef = array(
                            "nom" => $libelle,
                            "etat" =>"active" ,
                            "promo" => $idPromo ,
                            "description" =>$description ,
                            "image" =>$img
                        );

                        $allfilieres=readCsv(FILE.$page,".csv");
                        $allfilieres[]=$newRef;
                        writeCsv(FILE.$page,".csv",$allfilieres);
                    } else {
                        
                        $_SESSION["errord"]["img"]= "selectionnez une image svp" ;
                        echo "bakhoule ";
                    }
                    
                

             
            }
        }

    }
    include "/var/www/html/projet/template/partial/header.html.php";
include "/var/www/html/projet/modele/referent.php";

    if(isset($_SESSION["promo"])){
        if(isset($_POST["activePromo"])){
            $promo = $_POST["activePromo"];
            foreach($promos as &$prom){ 
            if($prom["name"] == $promo) {
                $prom["etat"] = "active";
                $_SESSION['promo'] = $prom;
                $_SESSION["filieres"]=$referentielsFiltres;
                
                echo "found";
            } else {
                $prom["etat"] = "inactive";
            }
        }
        writeCsv(FILE."promo",".csv",$promos);
        header("Location:");

        }

        foreach($referPactive as $refer){
            echo "<br/>";
        }
    }
   if(!isset($_SESSION["promo"])) {
        foreach($promos as $prom){
            if($prom["etat"]=="active")
            {
                $_SESSION['promo'] = $prom;
                $_SESSION["filieres"]=$referentielsFiltres;
                break;
            }
        }
    header("Location:");

    }
    $referentielsFiltres=$_SESSION['filieres'];
    $namePactive=$_SESSION['promo']['name'];
    $descriptPactive=$_SESSION['promo']['description'];
   
    if ($page=="present") {
include "/var/www/html/projet/modele/referent.php";
        
        include MODELE."$page.php";
        include TEMPLATE."$page.html.php";
    }elseif ($page=="student") {
        include MODELE."$page.php";
        include TEMPLATE."$page.html.php";
    }else{
        include MODELE."$page.php";
        include TEMPLATE."$page.html.php";

    }
    print_r($_SESSION["promo"]);
    include "/var/www/html/projet/template/partial/footer.html.php";
}else{

    include TEMPLATE."error.html.php";
}
}

 -->
