<?php
 include '/var/www/html/projet/modele/modele.php';
?>
<style>
    
</style>
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
                                <div class="list promoE">Liste des apprenants : <span class="colorG">(<?=count($etudiants)?>)</span></div>
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
                            <div class="paginate">
                            <div class="suiPre">
                                    <a class="pre" href="?page=3&pageAff=<?=$pageEtu-1?>"><</a>
                                </div>
                                <div class="linkPage">
                                    <?php
                                        for ($i = 1; $i <= $totalPage; $i++)
                                        {
                                            ?>
                                                <a href="?page=3&pageAff=<?=$i?>"><?=$i?></a> 
                                           <?php
                                        }
                                     ?>
                                </div>
                                <div class="suiPre">
                                    <a class="sui" href="?page=3&pageAff=<?=$pageEtu+1?>">></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


