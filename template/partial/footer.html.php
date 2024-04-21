

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
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS?>">
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
                    <div class="logo"><img src="<?=IMG.'logoS.png'?>" alt=""></div>
                    <div class="logText"><i class="fa-solid fa-minus"></i></span><span class="contText">Menu</span></div>
                    <div class="logText <?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"><span class="log"><i class="fa-solid fa-bars-staggered"></i></span><span class="contText"><a class="<?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"    style="color: #000000; text-decoration:none;" href="?page=dashboard">Dashboard</a></span></div>
                    <div class="logText <?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"><span class="log"><i class="fa-solid fa-clipboard"></i></span><span class="contText"><a class="<?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"  style="color: #000000; text-decoration:none;" href="?page=promo2">Prom</a></span></div>
                    <div class="logText <?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"><span class="log"><i class="fa-solid fa-calendar-days"></i></span><span class="contText"><a class="<?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"  style="color: #000000; text-decoration:none;" href="?page=referent">Référentiels</a></span></div>
                    <div class="logText <?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText"><a class="<?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"  style="color: #000000; text-decoration:none;" href="?page=student">Utilisateurs</a></span></div>
                    <div class="logText <?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText"><a class="<?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"  style="color: #000000; text-decoration:none;" href="#">Visiteurs</a></span></div>
                    <div class="logText"><span class="log"><i class="fa-regular fa-user"></i></span><span class="contText"><a style="color: #000000; text-decoration:none;" href="?page=present">Presence</a></span></div>
                    <div class="logText"><span class="log"><i class="fa-solid fa-calendar-days"></i></span><span class="contText"><a style="color: #000000; text-decoration:none;" href="#">Evenements</a></span></div>
            </div>
            <div class="page">
                <div class="bup">
                    <div>
                        <div class="burger"><i class="fa-solid fa-bars"></i></div>
                        <div class="menu"><label for="check"><i class="fa-solid fa-list"></i>'</label></div>
                        <form action="" method="post">
                        <div class="input">
                            <span class="icon"><button  style="background-color:inherit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
                            <input type="search" value="<?=$_POST["search"]?>"  name="search" required placeholder="Recherche par matricule">
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
                                <span class="typeUser"><?=$_SESSION["user"]["nom"]?></span>
                                <form action="" method="post">
                                <select name="decon" onchange="this.form.submit()" class="loginUser"> 
                                    <option value="deconnect"><?=$_SESSION["user"]["role"]?></option>
                                    <option value="logout">logout</option>
                                </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><div>
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