<?php
 include '/var/www/html/projet/modele/modele.php';
?>
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
                <div>Presence</div>
                <div>Promos > Création</div>
            </div>
            <div class="bmid bmid2">
                <div class="cont absence  ">
                   
                    <div class="contInp2">

                        <form action="" method="post" class="filter">
                            <select name="Statut" id="" class="Statut">
                            <option value=""  > Statut </option>
                            <option value="Present"> Présent </option>
                            <option value="Absent"> Absent </option>
                            </select>
                            <select name="Referentiel" id="" class="Referentiel">
                            <option value=""> Référentiels </option>
                            <option value="DevWebMobile"> Dev Web/Mobile </option>
                            <option value="DevData"> Developpement Data </option>
                            <option value="RefDig">Référent Digital</option>
                            <option value="AWS"> AWS </option>
                            <option value="Hackeuse"> Hackeuse </option>
                            </select>
                            <input type="date" name="date"  placeholder="Date"> 
                            <button type="submit">Back</button>
                        </form>
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
                                foreach ($etudiantsPage as $etudiant)
                                {
                                    ?>
                                        <div class="descEt dynam">
                                            <div class="image norm "><div class="im"><img src="icEtu.png" alt=""></div></div>
                                            <div class="nom norm colorG"><?=$etudiant["nom"]?></div>
                                            <div class="prenom colorG"><?=$etudiant["prenom"]?></div>
                                            <div class="mail "><?=$etudiant["mail"]?></div>
                                            <div class="genre norm "><?=$etudiant["sex"]?></div>
                                            <div class="numero "><?=$etudiant["numero"]?></div>
                                            <div class="action norm "><?php if($etudiant["statut"]==1){?><div class="act"></div><?php } else {?><div class="act redBak"></div><?php }?></div>
                                        </div>
                                    <?php
                               }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bfoot">&copy;Sonatel Academy</div>
        </div>
    </div>
</body>
</html>
<style>
    .page .bmid  .cont.absence{
         width: 100%;
         padding: ;
         height: 100%;
         display: flex;
         justify-content: start;
         background-color: inherit;
         align-items: start;
 
    }
    .page .bmid  .cont.absence .contInp2{
        width: 100%;
        height: auto;
        display: flex;
        align-items: start;
        justify-content: start;
        cursor:default;
        background-color: white;
    }
    .page .bmid  .cont.absence .contInp2 .filter{
        display:flex;
        width: 60%;
        height: 25%;
        position: relative;
        margin: 0;
        flex-direction: row;
        top: 0;
        gap: 1%;
        padding: 1%;
    }
    .page .bmid  .cont.absence .contInp2 .filter *{
        width: 30%;
        height: calc(2vh + 2vw);
        background-color: ;
        font-size: calc(.5vw + .5vh);
       border:.1vh solid ;
       font-weight: bold;
       background-color: white ;
       border-radius: .5vh;
        
    }

    .page .bmid  .cont.absence .contInp2 .filter select:nth-child(1){
        width: 20%;
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
          }
      }
  </style>