

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/729c991e7f.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <input type="checkbox" name="" checked class="hide" id="cachePopup"> 
    <input type="checkbox" name="" checked class="" id="suivant">
    <div class="contGlob">
        <div class="bar"></div>
        <div class="container">
            <input type="checkbox" class="checkHide hide" id="check">
            <div class="side hide">
                
                    <div class="logo"><img src="logoS.png" alt=""></div>
                    <div class="logText"><i class="fa-solid fa-minus"></i></span><span class="contText">Menu</span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-bars-staggered"></i></span><span class="contText">Dashboard</span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-clipboard"></i></span><span class="contText">Promos</span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-calendar-days"></i></span><span class="contText">Référentiels</span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText">Utilisateurs</span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText">Visiteurs</span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText">Presences</span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-calendar-days"></i></span><span class="contText">Evenements</span></div>
            </div>
            <div class="page">
                <div class="bup">
                    <div>
                        <div class="burger"><i class="fa-solid fa-bars"></i></div>
                        <div class="menu"><label for="check"><i class="fa-solid fa-list"></i>'</label></div>
                        <div class="input">
                            <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="search" name="password" required placeholder="Recherche par matricule">
                        </div>
                    </div>
                    <div>
                        <div class="jour">
                           <span> <i class="fa-solid fa-calendar-days"></i></span>20 March 2024
                        </div>
                        <div class="profile">
                            <div class="tof"></div>
                            <div class="tlUser">
                                <span class="typeUser">Super admin</span>
                                <span class="loginUser"> Admin admin v</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bint">
                    <div>ApPrenants</div>
                    <div>Promos > List > Details > Apprenants</div>
                </div>
                <div class="bmid bmid2">
                    <div class="dashPromE"> 
                        <div class="promoE">Promotion : <span class="colorG">Promotion 6</span></div>
                        <div class="refE">Referentiel: <span class="colorG">Dev Web/mobile</span></div>
                    </div>
                    <div class="cont">
                        <div class="vertical">
                                <div class="vertInt">
                                    <div>1</div>
                                    <div></div>
                                    <div>2</div>
                                </div>
                        </div>
                        <div class="contInp2">
                            <div class="bold">Promotion</div>
                            <div class="listCrud dashPromE">
                                <div class="list promoE">Liste des apprenants : <span class="colorG">(<?php $_GET['dd'] ?>)</span></div>
                        <div class="crud refE"><button type="submit"><label for="cachePopup">+ Nouveau</label></button><button type="submit">Insertion en masse</button><button type="submit"><span class="icon"><i class="fa-solid fa-calendar-days"></i></span> Fichier model</button><button type="submit">Liste des exclus</button></div>
                            </div>
                            <form action="" method="post">
                                <div class="blockInp">
                                    <div class="input">
                                        <span class="" style="position: absolute;left:calc(1vw + 1vh);top:37%"><i class="fa-solid fa-magnifying-glass"></i></span><input type="text" name="password" required placeholder="filter">
                                    </div>
                                </div>
                                <!-- <div class="blockInp col">
                                    <div>
                                        <label for="">Date Debut </label>
                                    <div class="input">
                                        <input type="date" name="password" required placeholder="Recherche par matricule"><span class="red" style="position: absolute;left:calc(2vw + 9vh);top:35%"> *</span>
                                    </div>
                                    </div>
                                   <div>
                                    <label for="">Date Fin </label>
                                    <div class="input">
                                        <input type="date" name="password" required placeholder="Recherche par matricule"><span class="red" style="position: absolute;left:calc(2vw + 9vh);top:35%"> *</span>
                                    </div>
                                   </div>
                                </div>
                                <div class="blockInp col col2">
                                   <div class="end"><button type="submit">Ajouter Referentiels</button></div>
                                   <div class="end"><button type="submit">Creer Promotion</button></div>
                                </div> -->
                            </form>

                            <div class="icFolder"><img src="icFolder.png" alt=""></div>
                            <div class="listEtu">
                                <div class="descEt">
                                    <div class="image norm">Image</div>
                                    <div class="nom norm">Nom</div>
                                    <div class="prenom">Prenom</div>
                                    <div class="mail">Email</div>
                                    <div class="genre norm">Genre</div>
                                    <div class="numero">Numero</div>
                                    <div class="action norm">Action</div>
                                </div>
                                <?php
                                include '/var/www/html/projet/modele/modele.php';
                                foreach ($etudiants as $etudiant)
                                {
                                    ?>
                                        <div class="descEt dynam">
                                            <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                            <div class="nom norm colorG"><?=$etudiant["nom"]?></div>
                                            <div class="prenom colorG"><?=$etudiant["prenom"]?></div>
                                            <div class="mail "><?=$etudiant["mail"]?></div>
                                            <div class="genre norm "><?=$etudiant["sex"]?></div>
                                            <div class="numero "><?=$etudiant["numero"]?></div>
                                            <div class="action norm "><input type="checkbox" <?php if($etudiant["statut"]==1){?>checked<?php }?>class="act"></div>
                                        </div>
                                        <style>
                                            .action.norm input{
                                                width: 50%;
                                                height: 50%;
                                                background-color: red;
                                            }
                                        </style>
                                    <?php
                               }
                               echo $page."dhsjhdshd";
                                ?>
                            </div>
                            <div class="paginate">
                                <div class="linkPage">
                                    
                                </div>
                                <div class="suiPre">
                                    
                                    <a class="pre" href="?z=3&page=<?=$page-1?>"><</a>
                                    <a class="sui" href="?z=3&page=<?=$page+1?>">></a>
                                </div>
                            </div>
                            <style>
                                .page .bmid.bmid2 .contInp2  .paginate{
                                    height: 5%;
                                    background-color:;
                                    width: 95%;
                                    display: inline-flex;
                                    position: relative;
                                }
                                .page .bmid.bmid2 .contInp2 .paginate div{
                                    width: 50vw;
                                    height: 100%;
                                    position: relative;
                                    display: inline-flex;
                                    align-items: center;
                                    gap: .5vw;
                                   a{
                                    display: inline-block;
                                        width: fit-content;
                                        background-color: ;
                                        font-size: calc(.8vw + .7vh);
                                        font-weight: bold;
                                        align-items: center;
                                        justify-content: center;
                                        margin-right: 1vw;
                                        color: goldenrod;
                                        background-color: black;
                                        text-decoration: none;

                                    }
                                }
                                .page .bmid.bmid2 .contInp2 .paginate .suiPre{
                                    justify-content: flex-end;
                                }
                            </style>
                        </div>
                    </div>
                </div>
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
        background-color: #000000;
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
    
</style>
<link rel="stylesheet" href="projet.css">