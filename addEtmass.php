<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/729c991e7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="projet.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
     <div class="contGlob">
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
                        <div class="crud refE"><button type="submit">+ Nouveau</button><button type="submit">Insertion en masse</button><button type="submit"><span class="icon"><i class="fa-solid fa-calendar-days"></i></span> Fichier model</button><button type="submit">Liste des exclus</button></div>
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
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm red">DIEYE</div>
                                    <div class="prenom red">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                <div class="descEt dynam">
                                    <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                    <div class="nom norm colorG">DIEYE</div>
                                    <div class="prenom colorG">Malik</div>
                                    <div class="mail ">dieye@gmail.com</div>
                                    <div class="genre norm ">M</div>
                                    <div class="numero ">77 777 77 77</div>
                                    <div class="action norm "><div class="act"></div></div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bfoot">&copy;Sonatel Academy</div>
            </div>
        </div>
    
    </div>
   <div class="contContMass">
    <div class="contAdEtMass">
        <div>Choisir Un file Excel</div>
        <div class="input">
            <input type="file" name="upload" accept=".xlsx, .xls, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel,">
        </div>
        <div>
            <button type="submit">Fermer</button>
            <button type="submit">Enregistrer</button>
        </div>
    </div>
   </div>
   <div class="back"></div>
</body>
</html>

<style>
    .contAdEtMass{
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999;
    }
    .back{
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 33;
    }
    body{
        margin: 0;
        padding: 0;
        width:100%;
        height: 100vh;
        position: relative;
    }
   .contContMass{
    width: 100%;
    height: 100vh;
   
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
 
   }
.contAdEtMass{
    width: 50%;
    height: 40vh;
    display: flex;
    align-items:center ;
    justify-content: center;
    background-color: white;
    position: relative;
    flex-direction: column;
}
.contAdEtMass div{
    width: 95%;
}
.contAdEtMass div:nth-child(1)
{
    margin-bottom: 2%;
    font-size: calc(.5vw + 1vh);
    font-weight: bold;
}
.contAdEtMass div:nth-child(3){
    margin-top: 5%;
display: flex;
justify-content: end;
gap: 1vw;
height: 6vh;
button{
    width: 15%;
    height: 100%;
    font-size: calc(.5vw + 1vh);
    font-weight: bold;
    border: none;
    cursor: pointer;
    background-color: rgb(53, 134, 124);
    color: white;
    border-radius: 5px;
}

}
.contAdEtMass div:nth-child(3) button:nth-child(1){
    background-color: rgb(180, 56, 56);
    width: 12%;
}
.contAdEtMass .input{
    width: 95%;
    height: 50%;
    border: 3px dashed black ;
    position: relative;
}
.contAdEtMass .input input{
    width: 100%;
    height: 100%;
    border: none;
    outline:none ;
    color: white;
    font-size: 1.5vh;}
    .contAdEtMass .input input[type="file"]::-webkit-file-upload-button {
        display: flex;
        justify-content: center;
        position: absolute;
        border-radius: 5px;
        cursor: pointer;
        width: 15vw;
        height: 2vh;
        translate:15vw 5vh  ;
        border: 1px solid;
        content: "drop file";
      }
.page .bmid .cont .vertical .vertInt div:nth-child(1),
.page .bmid .cont .vertical .vertInt div:nth-child(3){
width: calc(2vw + 2vh);
height: calc(4vw + 2vh);
border-radius: 50%;
background-color: rgb(53, 134, 124);
display: flex;
 align-items: center;
 justify-content: center;
 font-weight: bold;
 margin: 5%;
 position: relative;
}
.page .bmid .cont .vertical .vertInt {
    display: flex;
    flex-direction: column;
    justify-content:center ;
    align-items: center;
    width: 7vw;
    height: 100%;
    position: relative;
}
.page .bmid .cont .vertical .vertInt div{
    height: 100%;
    position: relative;
}
.page .bmid .cont .vertical .vertInt div:nth-child(2)
{
width: 1px;
height: 28vh;
background-color: rgb(223, 223, 223);
display: flex;
align-items: center;
justify-content: center;
}
.contGlob{
    position: absolute;
}

</style>