<?php 
include "/var/www/html/projet/config/bootsrap.php";
include "/var/www/html/projet/config/helper.php";
?>
<link rel="stylesheet" href="<?=CSS?>">
<?php 
session_start(); //session_destroy();
//$_SESSION["user"]="diop";

if(!isset($_SESSION["user"])){
    include("/var/www/html/projet/template/login.html.php");
    if(isset($_POST["mail"])){
        //var_dump($_POST);
        $username = $_POST["mail"];
        $password = $_POST["password"];
        var_dump($username,$password);
        if(empty($username) || empty($password)){
            $_SESSION["error"]="veuillez remplir tous les champs";
            header("Location:");
            var_dump($_SESSION["error"]);
        }else{
            $_SESSION["user"] ="user";
            header("Location:");
        }
}}else
{
    header("Location:");

    include "/var/www/html/projet/modele/promo.php";

   $page= $_REQUEST["page"]??"";
    if($_REQUEST["page"])
    {
        $page = $_REQUEST["page"];

        function isInFile($file, $page) {
            return in_array($page, $file);
        }

        if(isInFile($file, $page))
        {
           
            include "/var/www/html/projet/modele/referent.php";
            if(isset($_POST["addFiliere"])){
                echo "diop";
                if(empty($_POST["libellé"])|| empty($_POST["description"])){
                    $_SESSION["error"]="les champs libellé et description sont required";
                }else
                {
                    $_SESSION["error"]= "";
                    foreach($referentielsFiltres as $ref){
                        echo "diop";
                        if($_POST["libellé"]==$ref["nom"]){
                            $found=1;
                            echo"found";
                            break;
                        }
                    }
                    if($found== 1){
                        $_SESSION["error"]= "ce filiere exite deja";
                    }else
                    {
                        $_SESSION["error"] = "";

                        $libelle = $_POST["libellé"];
                        $description = $_POST["description"];
                        $etat = $_POST["etat"];
                        $img = $_FILES["img"]["name"]; // Récupérer le nom du fichier, pas son contenu

                        // Vérifier l'état et le définir en fonction
                        $etat = ($etat == "") ? "inactive" : "active";

                        // Si aucun fichier n'est envoyé, utilisez une image par défaut
                        if ($img == "") {
                            $img = "default.png";
                        } else {
                            $img_tmp = $_FILES["img"]["tmp_name"];
                            $upload_directory = IMG2 ."referentiel/";
                            // Vérifiez si le dossier de destination existe, sinon créez-le
                            if (!file_exists($upload_directory)) {
                                echo "creating temporary";
                                mkdir($upload_directory, 777, true);
                            }

                            if (move_uploaded_file($img_tmp, $upload_directory . $img)) {
                                echo "Image téléchargée avec succès.";
                            } else {
                                echo "Une erreur est survenue lors du téléchargement de l'image.";
                            }
                        }

                        $newRef = array(
                            "nom" => $libelle,
                            "etat" =>$etat ,
                            "promo" => isset($_SESSION['promo']['name']) ? $_SESSION['promo']['name'] : "" ,
                            "description" =>$description ,
                            "image" =>$img
                        );

                        $allfilieres=readCsv(FILE.$page,".csv");
                        $allfilieres[]=$newRef;
                        writeCsv(FILE.$page,".csv",$allfilieres);
                    }
                }


            }
            include "/var/www/html/projet/template/partial/header.html.php";
            if(isset($_SESSION["promo"])){
                if(isset($_POST["activePromo"])){
                    $promo = $_POST["activePromo"];
                    foreach($promos as &$prom){ // Utilisation de & pour modifier la valeur directement dans le tableau original
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