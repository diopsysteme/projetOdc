<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    body {
        background-color: whitesmoke;
        width: 98vw;
        height: 98vh;
        display: flex;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .sidenav {
        height: 100%;
        width: 20%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
    }
    .sidenav p {
        position: absolute;
        top: 10%;
        left: 8%;
        font-size: 100%;
        font-weight: lighter;
        color: rgb(24, 49, 83);
    }
    .sidenav .liste {
        position: absolute;
        top: 16%;
        left: 6%;
        width: 74%;
    }
    .sidenav a {
        padding: 4% 4% 4% 14%;
        text-decoration: none;
        font-weight: 500;
        font-size: 120%;
        color: rgb(24, 49, 83);
        display: block;
        width: 100%;
        transition: 0.3s;
      }
    .sidenav a svg{
        width: 8%;
      }
    .active {
        width: 100%;
        height: 34%;
        background-color: rgb(19, 138, 138);
        border-radius: 0.2em;
        color: white!important;
    }
    .sidenav a:hover {
        color: rgb(19, 138, 138);
        svg{
            fill: rgb(19, 138, 138);
        }
    }
      
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
    .logosonatel {
        width: 50%;
        height: 7%;
        top: 2%;
        left: 8%;
        position: absolute;
    }
    .logosonatel img {
        height: 100%;
    }
    .open {
        cursor: pointer;
        position: fixed;
        top: 2%;
        left: 22%;
        z-index: 2;
    }
    nav {
        position: fixed;
        top: 0;
        left: 21%;
        right: 2%;
        width: 78%;
        height: 8%;
        border-radius: 0 0 0.4em 0.4em;
        background-color: white;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }
    nav ul {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        position: relative;
    }
    nav ul li {
        list-style: none;
        height: 100%;
    }
    nav ul li:nth-child(1) button{
        position: absolute;
        background-color: whitesmoke;
        top: 0%;
        left: 5%;
        width: 3.2%;
        height: 60%;
        border: none;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        svg {
            fill: rgb(24, 49, 83);
            width: 70%;
            height: 70%;
        }
    }
    nav ul li:nth-child(2) button{
        border: none;
    }
    nav ul li:nth-child(3) button{
        position: absolute;
        background-color: white;
        top: -8%;
        left: 68%;
        width: 11%;
        height: 70%;
        border: 0.1em solid rgb(216, 215, 215);
        border-radius: 0.4em;
        display: flex;
        justify-content: space-between;
        align-items: center;
        svg {
            fill: rgb(19, 138, 138);
            position: absolute;
            left: -8%;            
            width: 40%;
            height: 40%;
        }
    }
    nav ul li:nth-child(3) span {
        position: absolute;
        left: 22%;
        color: rgb(19, 138, 138);
        font-weight: bolder;
        font-size: 120%;
    }
    nav ul li a {
        text-decoration: none;
        color: rgb(24, 49, 83);
        font-weight: 500;
    }
    #toggle {
        display: none;
      }
      
    #toggle:checked ~ .sidenav {
        width: 0;
    }
    #toggle:checked ~ .main {
        left: 6%;
        right: 0;
        width: 94%;
        .refliste {
            width: 9%;
            position: absolute;
            top: 9%;
            right: 0;
        }
    }
    .open{
        width: 2%;
    }
    .open svg{
        width: 100%;
        height: 100%;
    }
    input::placeholder {
        color: rgb(7, 30, 63);
        opacity: 0.4;
        position: absolute;
        left: 8%;
        font-size: 120%;
    }
    nav ul li:nth-child(4) {
        position: absolute;
        background-color: white;
        top: -8%;
        left: 79%;
        width: 16%;
        height: 70%;
        border-radius: 0.4em;
    }
    .infoadmin {
        position: relative;
        box-sizing: border-box;
        width: 100%;
        height: 100%;
        font-size: 110%;
    }
    .nameadmin {
        position: absolute;
        top: 6%;
        right: 10%;
    }
    .dropdownadmin {
        position: absolute;
        bottom: 10%;
        right: 0;
    }
    .imageadmin {
        position: relative;
        top: -10%;
        left: 8%;
        background-color: gray;
        width: 28%;
        height: 116%;
        border-radius: 50%;
        overflow: hidden;
    }
    .imageadmin img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: fill;
    }
    .main {
        position: relative;
        top: 8%;
        left: 20.8%;
        width: 79%;
        height: 98%;
        color: rgb(24, 49, 83);
    }
    .main .Entete {
        position: relative;
        top: -1%;
        width: 100%;
    }
    .refliste {
        position: absolute;
        top: 0;
        right: 0%;
        width: 12%;
        font-weight: bold;
    }
    .refliste::before {
        content: " Présence";
        opacity: 0.4;
    }
    .container {
        position: relative;
        top: -2%;
        left: 0;
        right: 2%;
        width: 98%;
        height: 86%;
        padding: 1%;
        background-color: white;
        border-radius: 1%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .filtrer {
        width: 80%;
        height: 8%;
    }
    .container .filtrer select {
        width: 8%;
        height: 80%;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 90%;
        opacity: 0.6;
        border-radius: 0.4em;
        text-align: left;
        padding-left: 1%;
        margin-right: 1%;
        background-color: white;
        color: rgb(99, 99, 128);
    }
    .container .filtrer select:nth-child(2) {
        width: 16%;
    }
    .container .filtrer input[type="date"] {
        width: 20%;
        height: 80%;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 90%;
        opacity: 0.6;
        border: 1px solid;
        border-radius: 0.4em;
        text-align: left;
        padding-left: 1%;
        margin-right: 1%;
        text-transform: uppercase;
        background-color: white;
        color: rgb(99, 99, 128);
        ::placeholder {
            color: rgb(99, 99, 128);
            opacity: 0.6;
            z-index: 2;
        }
    }
    .container .filtrer input[type="submit"]{
        bottom: 6%;
        left: 30%;
        width: 14%;
        height: 76%;
        border: none;
        border-radius: 0.4em;
        background-color: rgb(18, 126, 126);
        color: white;
        padding-left: 4%;
        font-weight: bolder;
        font-size: 100%;
    }
    .listepresence {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        table {
            border-collapse: collapse;
            th {
                background-color: rgb(244, 244, 253);
                padding-top: 1%;
                padding-bottom: 1%;
                font-weight: 550;
            }
            td {
                padding-left: 1%;
                padding-right: 1%;
                text-align: center;
            }
            td:nth-child(1) {
                color: green;
            }
            td:nth-child(7) {
                width: 10%;
                .present {
                    width: 100%;
                    text-align: left;
                    width: 80%;
                    height: 80%;
                    border-radius: 0.2em;
                    padding: 6%;
                    text-align: center;
                    color: rgb(19, 138, 138);
                    background-color: rgb(214, 236, 236);
                }
                .absent {
                    width: 100%;
                    text-align: left;
                    width: 80%;
                    height: 80%;
                    border-radius: 0.2em;
                    padding: 6%;
                    text-align: center;
                    color: rgb(148, 14, 14);
                    background-color: pink;
                }
            }
        }
    }
    .container .pages {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .container .pages .nbitems {
        width: 20%;
        svg {
            position: absolute;
            left: 10.4%;
            width: 2%;
            height: 2%;
        }
    }
    .container .pages select {
        width: 16%;
        border: none;
        background-color: transparent;
        outline: 0;
        font-size: 100%;
        font-weight: bold;
    }
    .container .pagination {
        width: 20%;
        display: flex;
        justify-content: space-around;
        svg {
            position: absolute;
            bottom: 2%;
            left: 9.5%;
            width: 2%;
            height: 2%;
        }
    }
    .container .pagination button {
        border: none;
        background-color: transparent;
        outline: 0;
        color: rgb(24, 49, 83);
        cursor: pointer;
        width: 10%;
        height: 16%;
        svg {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%
        }
    }
    .settings {
        position: fixed;
        bottom: 2%;
        right: 1%;
        width: 3%;
        height: 6%;
        border-radius: 50%;
        background-color: rgb(19, 138, 138);
        display: flex;
        justify-content: center;
        svg {
            width: 50%;
            height: 100%;
        }
    }
    </style>
<body>
    <nav>
        <ul>
            <li>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                      </svg>
                </button>
            </li>
            <li style="width: 24%; position: absolute; left: 9%; height: 100%;">
                <div class="search-container" style="position: relative; width: 100%; height: 100%;">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Rechercher par matricule" name="search" style=" position: absolute; width: 100%; height: 60%; top: 0%; border: none; border-radius: 5em; background-color: whitesmoke;">
                      <button type="submit" style="position: absolute; left: 88%; height: 50%; width: 10%; top: 4%; background-color: transparent; display: flex;">
                        <svg style="width: 100%; height: 100%;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path fill="rgb(19, 138, 138)" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                    </form>
                  </div>
            </a></li>
            <li>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <span> 20 March 2024 </span>
                </button>
            </li>
            <li>
                <div class="infoadmin">
                    <div class="imageadmin">
                        <img src="admin.png" alt="">
                    </div>
                    <div class="nameadmin" style="color: rgb(19, 138, 138); "> SUPER_ADMIN </div>
                    <div class="dropdownadmin"> Admin Admin 
                        <i class='fas fa-angle-down'></i>
                    </div>
                </div>
            </li>
          </ul>
    </nav>
    <input type="checkbox" id="toggle">
    <label for="toggle" class="open">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
    </label>

    <div id="mySidenav" class="sidenav">
        <div class="logosonatel">
            <img src="sonatelacademy.png" alt="">
        </div>
        <p>-- MENU</p>
        <div class="liste">
            <a href="#">
                <i class='fas fa-align-right'></i>
                Dashboard</a>
            <a href="#">
                <i class='fas fa-clipboard-list' ></i>
                Promos</a>
            <a href="Referentiel.html">
                <i class='fas fa-calendar-alt'></i>
                Référentiels</a>
            <a href="#">
                <i class='far fa-user-circle'></i>
                Utilisateurs</a>
            <a href="#">
                <i class='far fa-user-circle'></i>
                Visiteurs</a>
            <a href="#"  class="active">
                <i class='far fa-user-circle'></i>
                Presence</a>
            <a href="#">
                <i class='far fa-calendar-alt'></i>
                Evénements</a>
        </div>
    </div>

    <div class="main">
        <div class="Entete">
            <h2>Présence</h2>
            <div class="refliste">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                </svg>
                Liste </div>
        </div>
        <div class="container">
            <div class="filtrer">
                <select name="Statut" id="" class="Statut">
                    <option value="#"> Statut </option>
                    <option value="Present"> Présent </option>
                    <option value="Absent"> Absent </option>
                </select>
                <select name="Referentiel" id="" class="Referentiel">
                    <option value="#"> Référentiels </option>
                    <option value="DevWebMobile"> Dev Web/Mobile </option>
                    <option value="DevData"> Developpement Data </option>
                    <option value="RefDig">Référent Digital</option>
                    <option value="AWS"> AWS </option>
                    <option value="Hackeuse"> Hackeuse </option>
                </select>
                <input type="date" placeholder="MM/DD/YYYY" name="date" class="datepresence">
                <input type="submit" value="Rafraichir">
            </div>
            <div class="listepresence">
                <table>
                    <tr>
                      <th>Matricule</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Téléphone</th>
                      <th>Référentiel</th>
                      <th>Heure d'arrivée</th>
                      <th>Status</th>
                    </tr>
                    <tr>
                      <td>P6_DEVDAT_2024_129</td>
                      <td>FAYE</td>
                      <td>Ibrahima</td>
                      <td>771909638</td>
                      <td>Developpement Data</td>
                      <td>06:49</td>
                      <td> <p class="present">PRESENT</p></td>
                    </tr>
                    <tr>
                      <td>P6_REFDIG_2024_130</td>
                      <td>khadim</td>
                      <td>deme</td>
                      <td>778783197</td>
                      <td>Referent Digital</td>
                      <td>09:34</td>
                      <td> <p class="present">PRESENT</p></td>
                    </tr>
                    <tr>
                      <td>P6_REFDIG_2024_135</td>
                      <td>DIAGNE</td>
                      <td>ASSANE</td>
                      <td>770968798</td>
                      <td>Referent Digital</td>
                      <td>07:48</td>
                      <td> <p class="present">PRESENT</p></td>
                    </tr>
                    <tr>
                      <td>P6_DEVDAT_2024_136</td>
                      <td>fall</td>
                      <td>mouhamed abdoullah</td>
                      <td>785844966</td>
                      <td>Developpement Data</td>
                      <td>07:47</td>
                      <td> <p class="present">PRESENT</p></td>
                    </tr>
                    <tr>
                      <td>P6_DEVDAT_2024_137</td>
                      <td>kanteye</td>
                      <td>thiara</td>
                      <td>772509700</td>
                      <td>Developpement Data</td>
                      <td>08:00</td>
                      <td> <p class="present">PRESENT</p></td>
                    </tr>
                    <tr>
                      <td>P6_DEVDAT_2024_138</td>
                      <td>fall</td>
                      <td>sokhna mame diarra</td>
                      <td>776840120</td>
                      <td>Developpement Data</td>
                      <td>06:57</td>
                      <td> <p class="present">PRESENT</p></td>
                    </tr>
                    <tr>
                      <td>P6_DEVWEB_2024_20</td>
                      <td>THIAM</td>
                      <td>El Hadj Fallou Mbacké</td>
                      <td>777941128</td>
                      <td>Dev Web/Mobile</td>
                      <td>-</td>
                      <td> <p class="absent">ABSENT</p> </td>
                    </tr>
                    <tr>
                      <td>P6_DEVWEB_2024_41</td>
                      <td>FALL</td>
                      <td>Makhtar</td>
                      <td>770643381</td>
                      <td>Dev Web/Mobile</td>
                      <td>-</td>
                      <td> <p class="absent">ABSENT</p> </td>
                    </tr>
                    <tr>
                      <td>P6_REFDIG_2024_61</td>
                      <td>COLY</td>
                      <td>Ndeye mareme badiane</td>
                      <td>771249834</td>
                      <td>Referent Digital</td>
                      <td>-</td>
                      <td> <p class="absent">ABSENT</p> </td>
                    </tr>
                    <tr>
                      <td>P6_REFDIG_2024_67</td>
                      <td>SAGNA</td>
                      <td>DJIBY</td>
                      <td>776564942</td>
                      <td>Referent Digital</td>
                      <td>-</td>
                      <td> <p class="absent">ABSENT</p> </td>
                    </tr>
                  </table>
            </div>
            <div class="pages">
                <div class="nbitems">
                    Items per page:
                    <select name="nbitems" >
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">5</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                   
                </div>
                <div class="pagination">
                    111-120 of 128
                    <button>
                        I<i class='fas fa-angle-left'></i>
                    </button>
                    <button>
                        <i class='fas fa-angle-left'></i>
                    </button>
                    <button>
                        <i class='fas fa-angle-right'></i>
                    </button>
                    <button>
                        <i class='fas fa-angle-right'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="settings">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#ffffff" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
        </svg>
    </div>
</body>
</html>