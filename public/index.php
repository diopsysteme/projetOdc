<?php 
include "/var/www/html/projet/config/bootsrap.php";
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
   $page= $_REQUEST["page"]??"";
    if($_REQUEST["page"])
    {
        $page = $_REQUEST["page"];

        function isInFile($file, $page) {
            return in_array($page, $file);
        }

        if(isInFile($file, $page))
        {
            include "/var/www/html/projet/template/partial/header.html.php";

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
            include "/var/www/html/projet/template/partial/footer.html.php";
        }else{

            include TEMPLATE."error.html.php";
        }
    }

 



}
?>