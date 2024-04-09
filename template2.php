<?php 
session_start(); //session_destroy();
//$_SESSION["user"]="diop";
if(!isset($_SESSION["user"])){
    include("/var/www/html/projet/login.php");
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
}}else{
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <script src="https://kit.fontawesome.com/729c991e7f.js" crossorigin="anonymous"></script>
    <title>ODCINSIDE</title>
    <style>
    </style>
</head>
<body>
    <input type="checkbox" name="" checked class="hide" id="cachePopup"> 
    <input type="checkbox" name="" checked class="hide" id="suivant">
    <div class="contGlob">
        <div class="bar"></div>
        <div class="container">
            <input type="checkbox" class="checkHide hide" id="check">
            <div class="side hide">
                    <div class="logo"><img src="logoS.png" alt=""></div>
                    <div class="logText"><i class="fa-solid fa-minus"></i></span><span class="contText">Menu</span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-bars-staggered"></i></span><span class="contText"><a style="color: #000000; text-decoration:none;" href="template2.php?page=3">Dashboard</a></span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-clipboard"></i></span><span class="contText"><a style="color: #000000; text-decoration:none;" href="template2.php?page=4">Prom</a></span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-calendar-days"></i></span><span class="contText"><a style="color: #000000; text-decoration:none;" href="template2.php?page=1">Référentiels</a></span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText">Utilisateurs</span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText">Visiteurs</span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText"><a style="color: #000000; text-decoration:none;" href="template2.php?page=5">Presence</a></span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-calendar-days"></i></span><span class="contText">Evenements</span></div>
            </div>
            <div class="page">
                <div class="bup">
                    <div>
                        <div class="burger"><i class="fa-solid fa-bars"></i></div>
                        <div class="menu"><label for="check"><i class="fa-solid fa-list"></i>'</label></div>
                        <form action="" method="post">
                        <div class="input">
                            <span class="icon"><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
                            <input type="search"  name="password" required placeholder="Recherche par matricule">
                        </div>
                        </form>
                    </div>
                    <div>
                        <div class="jour">
                           <span> <i class="fa-solid fa-calendar-days"></i></span>20 March 2024
                        </div>
                        <div class="profile">
                            <div class="tof"></div>
                            <div class="tlUser">
                                <span class="typeUser">Super admin</span>
                                <span class="loginUser">Admin admin v</span>
                            </div>
                        </div>
                    </div>
                </div>
         <?php
        if(isset($_REQUEST["page"]) ){
            $page=$_REQUEST["page"];

                if($page==3){
                                $eleByPage=6;
                                include '/var/www/html/projet/modele/student.php';
                                $pageEtu = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
                                $totalPage=ceil(count($etudiants)/$eleByPage); //ceil() fonction qui arrondit par exee
                               // echo($pageEtu<1 || $pageEtu>$totalPage);
                                if($pageEtu<1 || $pageEtu>$totalPage)
                                header("Location:?page=3&pageAff=1");
                                $eleDeb = ($pageEtu-1)*$eleByPage;
                                $etudiantsPage = array_slice($etudiants, $eleDeb, $eleByPage); //array_slice() permet de copier un partie d'un tableau dans un nouveau tableau on donne juste le nombre 
                                include "/var/www/html/projet/studentGestion.html.php";
                }elseif($page==1)
                include "/var/www/html/projet/prom1.html.php";
                elseif($page==2)
                include "/var/www/html/projet/prom2.html.php";
            elseif($page== 4)
                include "/var/www/html/projet/refDash.html.php";
            elseif($page == 5 || isset($_SESSION['affichePresence'])){
                include '/var/www/html/projet/modele/present.php';

                $eleByPage=2;
                $pageEtu = $_GET['pageAff'] ?? 1;

if(isset($_POST["statut"]))
$_SESSION['affichePresence'] = $_REQUEST;
var_dump(isset($_POST["statut"]));

function filtrerPresences($presences) {
    
    $sess=$_SESSION["affichePresence"];
    $statut_filtre = $sess['statut'];
    $referentiel_filtre = $sess['referentiel'] ;
    $date_filtre = $sess['jour'];
    return ($statut_filtre == "" || $presences["statut"] == $statut_filtre) &&
           ($referentiel_filtre == "" ||  $presences["referentiel"] == $referentiel_filtre) &&
           ($date_filtre == "" || $presences["jour"] == $date_filtre);
}

$listeFiltre = array_filter($presences, 'filtrerPresences');

$totalPage=ceil(count($listeFiltre)/$eleByPage);

                var_dump($pageEtu);
                if($pageEtu<1 || $pageEtu>$totalPage)
                $pageEtu= 0;
                    $eleDeb = ($pageEtu-1)*$eleByPage;
                    $etudiantsPage = array_slice($listeFiltre, $eleDeb, $eleByPage); //array_slice() permet de copier un partie d'un tableau dans un nouveau tableau on donne juste le nombre
                    include "/var/www/html/projet/present.html.php";
                }   
                // if(0)
                // include "/var/www/html/projet/addE2.html.php";
                // if(0)
                // include "/var/www/html/projet/addEMass.html.php";
         }else{
           // include "/var/www/html/projet/dashboard.html.php";
         }
         ?>
                <div class="bfoot">&copy;Sonatel Academy</div>
            </div>
        </div>
    </div>
    <div class="cont2 popup">
        <div class="div1">
            <div>Nouvel Apprenant</div>
            <div><label for="cachePopup">+</label></div>
        </div>
        <div class="div2">
            <div>1</div>
            <div>Information Perso</div>
            <div> <hr></div>
            <div>2</div>
            <div>Information Supplementaire</div>
        </div>
       <form action="">
        <div class="div3">
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="mail" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="mail" name="prenom" required placeholder="Enter first name  ">
                    </div>
                </div>
            </div>
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="mail" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="mail" name="prenom" required placeholder="Enter first name  "> 
                    </div>
                </div>
            </div>
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="mail" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="date" class="date" name="prenom" required placeholder="Enter first name  "> 
                    </div>
                </div>
            </div>
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="mail" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="mail" name="prenom" required placeholder="Enter first name  "> 
                    </div>
                </div>
            </div>
        </div>
        <div class="div4">
            <button type="submit" name="sub"><label for="suivant">Suivant</label> </button>
        </div>
       </form>
    </div>
    <div class="cont2 cont3">
        <div class="div1">
            <div>Nouvel Apprenant</div>
            <div><a href="addEtuP1.html" target="_blank" rel="noopener noreferrer">+</a></div>
        </div>
        <div class="div2">
            <div>//</div>
            <div>Information Perso</div>
            <div> <hr></div>
            <div>2</div>
            <div>Information Supplementaire</div>
        </div>
       <form action="">
        <div class="div3">
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="mail" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="mail" name="prenom" required placeholder="Enter first name  "> 
                    </div>
                </div>
            </div>
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="file" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="file" name="prenom" required placeholder="Enter first name  "> 
                    </div>
                </div>
            </div>
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                    <div>Prénom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="file" name="nom" required placeholder="Enter last name ">
                    </div>
                    <div class="input">
                        <input type="file" class="date" name="prenom" required placeholder="Enter first name  "> 
                    </div>
                </div>
            </div>
            <div class="contLog">
                <div class="contLabel">
                    <div>Nom</div>
                </div>
                <div>
                    <div class="input">
                        <input type="file" name="nom" required placeholder=" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="div4">
            <button type="submit" name="sub">+ Cancel</button>
            <button type="submit" name="sub">+ Creer nouvel apprenant</button>
        </div>
       </form>
    </div>
    <div class="back"></div>
<div class="back"></div>
</body>
</html>
<style>
    .contGlob{
        width: 100%;
        height: 100%;
        background-color: ;
        position: relative;
        top: 0;
        left: 0;
    }
    .back{
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 33;
        display:  ;
    }
    .cont2{
        display:  ;
    }
    #cachePopup:checked {
        ~ .cont2.popup{
            display: none;
        }
       
    }
    #cachePopup:checked {
        ~ .back{
            display: none;
        }
       
    }
    #cachePopup{
        display: none;
    }
    #suivant:checked{
        ~.cont2.cont3{
            display: none;
        }
    }
    #suivant:checked{
        ~.cont2.cont3{
            display: none;
        }
    }
    #suivant:checked{
    }
    
    .page .bmid .cont.promo2{
          flex-direction: column;
          position: relative;
          justify-content: center;
          align-items: start;
                  }
      .page .bmid  .cont.promo2 .vertical{
          height: 40vh;
          flex-direction: row;
          position: relative;
          border-radius: 0;
          width: 20%;
      }
      .page .bmid .cont.promo2 .contInp2{
          height: 80vh;
          width: 100%;

      }
      .page .bmid  .cont.promo2 .vertical div{
          height: 100%;
          display: flex;
          flex-direction: column;
          background-color:;
          border-radius: 0;
          position: relative;
      }
      .page .bmid .cont.promo2 .vertical .vertint{
          height: 100%;
      }
      .page .bmid .cont.promo2 .vertical .vertText{
          width: 100%;
          height: 90%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          font-size: calc(.5vw + 1vh) ;
          font-weight: bold ;
      }
      .page .bmid  .cont.promo2 .vertical .vertText div:nth-child(3){
          display: flex;
          justify-content: end;
      }
      .page .bmid  .cont.promo2 .contInp2{
          height: 100vh;
          width: 100%;
          display: flex;
          justify-content: space-between;
          align-items: space-between;
          margin: 0;
          padding: 0;
         
          margin-top:2%;
      }
      .page .bmid  .cont.promo2 .contInp2 form div{
          width: 40%;
          height: 80vh;
          margin: 0;
          padding: 0;
          font-size: calc(.5vw + 1vh);
          display: flex;
          gap: 1vw;
          align-items: center;
         position: relative;

      }
      .page .bmid  .cont.promo2 .contInp2 form div input{
          width: 2vh;
          height: 2vh;
          margin-left: 15%;
      }
      .page .bmid  .cont.promo2 .contInp2 .labSelect{
          font-size: calc(.5vw + 1vh);
          display: flex;
          align-items: center;
          justify-content: start;
          width: 100%;
          margin: 0;
          padding: 0;
          margin-left: 12%;
          height: 2vh;
      }
      .page .bmid  .cont.promo2 .contInp2 form{
          position: relative;
      }
      .page .bmid  .cont.promo2 .contInp2 form .blockInp{
          position: relative;
          display: flex;
          flex-direction: row;
          height: 100vh;
          justify-content: start;
          .end{
              width: 25%;
              height: 100%;
              display: flex;
              justify-content: start;
              margin-left: 5%;
              button{
                  width: 100%;
                  height: 90%;
                  font-size: calc(.5vw + 1vh);
                  font-weight: bold;
                  border: none;
                  cursor: pointer;
                  background-color: rgb(53, 134, 124);
                  color: white;
                  border-radius: 5px;
              }
          }
      }
      .page .bmid  .cont.promo2 .contInp2 form .blockInp .end:nth-child(1)
      {
          button{
              color: black;
              background-color: rgb(223, 223, 223);
              border: none;
          }
      }
      button , a,label, span{
        border : none;
        cursor: pointer;
      }
  </style>
  <?php } ?>