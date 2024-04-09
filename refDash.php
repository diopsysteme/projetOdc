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
            
            <div class="bfoot">&copy;Sonatel Academy</div>
        </div>
    </div>
</body>
</html>
<style>
    input[type="checkbox"] {
        background-color: rgb(53, 134, 124); /* Couleur de fond lorsque le checkbox est coché */
    }
    .page .bmid .divRef{
        width: 100%;
        height: 100%;
        background-color:inherit;
        position: relative;
        padding:  0 0 0;
        display: block ;
        justify-content: center;
        align-items: center;
    }
    .page .bmid .divRef div{
        position: relative;
        border-radius: calc(1vh + .5vw);
        display: inline-block;
        width: calc(9vw + 9vh);
        height: calc(10vw + 18vh);
        background-color: white;
        margin-right: calc(.5vh + .5vw);
        margin-bottom: calc(.2vh + .2vw);
    }
    .page .bmid .divRef div:nth-child(5){
        width: calc(14vw + 14vh);
    }
    .page .bmid .divRef div .point{
        font-size: calc(2vh + 1vw);
        font-weight: bold;
        width: 20%;
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .page .bmid .divRef div .contInRef{
        position: relative;
        width: 100%;
        height: 80%;
    }
    .page .bmid .divRef div .contInRef .photo{
        width: 100%;
        height: 60%;
        border-radius: calc(1vh + .5vw);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .page .bmid .divRef div .contInRef .photo img{
       padding: calc(1vh + .5vw);
    }
    .page .bmid .divRef div .contInRef .statutRef,
    .page .bmid .divRef div .contInRef .nomRef{
        position: relative;
        width: 100%;
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: calc(1vh + .5vw);
        font-weight: bold;
    }

    .page .bmid .divRef .specRef form{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    .page .bmid .divRef .specRef form div{
        width: 90%;
        height: 15%;
        display: flex;
        align-items: center;
        position: relative;

    }
    .page .bmid .divRef .specRef form .inpRef{
        position: relative;
        height:30%;
        display: flex ;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        margin: 0;

    }
    .page .bmid .divRef .specRef form .inpRef label {
        margin-left: 1%;
        font-size: calc(1vh + .5vw);
        align-items: start;
    }
    .page .bmid .divRef .specRef form .inpRef .input{
        height:70%;
        width: 100%;
        border: solid 1px #aaa;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }
    .page .bmid .divRef .specRef form .inpRef .input input{
        width: 70%;
    }

    .page .bmid .divRef .specRef form .nomRef{
        font-size: calc(1vh + 1vw);
        font-weight: bold;
    }
    .page .bmid .divRef .specRef form .btn{
        width: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor:default;
    }
    .page .bmid .divRef .specRef form .btn button{
        width: 50%;
        height: 90%;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        background-color: rgb(53, 134, 124);
        color: white;
    }
    .colorBase{
        color: rgb(53, 134, 124);
    }
</style>