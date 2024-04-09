    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <title>appre</title>
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
.page .bmid {
   position: relative;
   
}

.page{
    position: relative;

}
.page .bmid.bmid2{
    position: relative;
}
.page .bmid.bmid2 .cont {
    height: 79vh;
    justify-content: end;
    align-items: start;
    border-radius: 20px;
    position: relative;
}
.page .bmid.bmid2 .cont .vertical{
    height: 60vh;
    flex-direction: row;
    position: relative;
    border-radius: 0;
    width: 5%;
}
.page .bmid.bmid2 .cont .vertical .vertInt div:nth-child(2) {
    width: 1px;
    height: 90%;
    background-color: rgb(223, 223, 223);
    display: flex;
    align-items: center;
    justify-content: center;
}
.page .bmid.bmid2 .dashPromE{
    height: 8vh;
width: 100%;
background-color: white;
margin-bottom: 1vh;
border-radius: 20px;
display: flex;
position: relative;
align-items: center;
}
.page .bmid.bmid2 .dashPromE .refE,
.page .bmid.bmid2 .dashPromE .promoE{
width: 50%;
height: 60%;
font-size:calc(1vh + .5vw);
font-weight: bold;
display: flex;
align-items: center;
position: relative;
}
.page .bmid.bmid2 .dashPromE.listCrud .crud{
    justify-content: space-around;
    height: 100%;
    width: 80%;
    position: relative;
}
.page .bmid.bmid2 .dashPromE.listCrud .crud button{
    height: 65%;
    width: 22%;
    font-size:calc(1vh + .5vw);
    font-weight: bold;
    color: white;
    border-radius: .5vw;
    position: relative;
}
.page .bmid.bmid2 .dashPromE.listCrud .crud button:nth-child(1){
    width: 20%;
    background-color: rgb(53, 134, 124);
}
.page .bmid.bmid2 .dashPromE.listCrud .crud button:nth-child(2){
    width: 26%;
    background-color: orange;
}
.page .bmid.bmid2 .dashPromE.listCrud .crud button:nth-child(3)
{
background-color: rgb(35, 103, 116);
}
.page .bmid.bmid2 .dashPromE.listCrud .crud button:nth-child(4)
{
    background-color: rgb(6, 78, 138);
}
.page .bmid.bmid2 .dashPromE .refE{
    display: flex;
    justify-content: end;}
    .page .bmid.bmid2 .contInp2{
        position: relative;
        height: 85%;
        justify-content:start;
        align-items: start;
        width: 95vw;
        gap: 0;
        margin: 0;
    }
    .page .bmid.bmid2 .contInp2 form{
        height: 8vh;
        margin:0;
        width: 100%;
        position: relative;
    }

    .page .bmid.bmid2 .contInp2 .icFolder{
        height:8vh ;
        width: 20%;
        background-color: ;
        position: relative;
    }
    .page .bmid.bmid2 .contInp2 .icFolder img{
        width: 35%;
        height: 100%;
        position: relative;
    }
    .page .bmid.bmid2 .contInp2 .listEtu{
        margin-top: .5%;
        position: relative;
        width: 100%;
        height: 90%;
        border-radius: 20px;
    }
    .page .bmid.bmid2 .contInp2 .listEtu .descEt{
        position: relative;
        width: 100%;
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: aliceblue;
    }
    .page .bmid.bmid2 .contInp2 .listEtu .descEt div{
        font-size: calc(.5vw + 1vh);
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        width: 20%;
        
    }
    .page .bmid.bmid2 .contInp2 .listEtu .descEt .norm{
        width: 20%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
.colorG{
    color: rgb(53, 134, 124)
}
.page .bmid.bmid2 .contInp2 .listEtu .descEt.dynam{
    background-color: transparent;
}
.page .bmid.bmid2 .contInp2 .listEtu .descEt.dynam div{
    font-size: calc(.5vw + 1vh);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width:20%;
}
.page .bmid.bmid2 .contInp2 .listEtu .descEt.dynam  .norm{
    width: 20%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}
.page .bmid.bmid2 .contInp2 .listEtu .descEt.dynam .image.norm .im{
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1vh;
    position: relative;
    img{
        width: 93%;
        height: 100%;
    }
}
.page .bmid.bmid2 .contInp2 .listEtu .descEt.dynam .action{
    width: 20%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;

    .act{
        width: 20%;
        height: 70%;
        background-color:aliceblue ;
    }
   
}

        </style>
    </head>
<body>
    
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
</body>

</html>

