<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <title>board</title>
        <link rel="stylesheet" href="projet.css">
        <script src="https://kit.fontawesome.com/729c991e7f.js" crossorigin="anonymous"></script>
        <style>
.checkHide{
    display:none ;
}
.checkHide:checked{
    ~.hide{
         display: none;
        
    }
    
}
.checkHide:checked{
    ~.page{
        width: 100vw;
    }
}
i{
    font-size: 1vw;
}

        </style>
    </head>
<body>
    
    <div class="ic"><i class="fa-solid fa-martini-glass"></i></div>
    <div class="bar"></div>
    <div class="container">
        <input type="checkbox" class="checkHide" id="check">
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
                <div>PROMOTION</div>
                <div>Promos > Création</div>
            </div>
            <div class="bmid">
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
                        <form action="" method="post">
                            <div class="blockInp">
                                <label for="">Libelle   </label>
                                <div class="input">
                                    <input type="text" name="password" required placeholder="Entrer le libellé"><span class="red" style="position: absolute;left:calc(5vw + 9vh);top:35%"> *</span>
                                </div>
                            </div>
                            <div class="blockInp col">
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
                            </div>
                        </form>
                        <div class="bold">Referentiels</div>
                    </div>
                </div>
            </div>
            <div class="bfoot">&copy;Sonatel Academy</div>
        </div>
    </div>
</body>
</html>

