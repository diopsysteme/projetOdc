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
                    <div class="logText <?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"><span class="log"><i class="fa-solid fa-clipboard"></i></span><span class="contText"><a class="<?php if($_SESSION["user"]["role"]!="admin") echo "desactive";?>"  style="color: #000000; text-decoration:none;" href="?page=promo1">Prom</a></span></div>
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
                </div>