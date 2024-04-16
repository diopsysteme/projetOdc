<?php
 include '/var/www/html/projet/modele/modele.php';
?>
<style>
    
</style>
<div class="bint">
                    <div>Apprenants  </div>
                    <div>Promos > List > Details > Apprenants</div>
                </div>
                <div class="bmid bmid2">
                    <div class="dashPromE"> 
                        <div class="promoE">Promotion : <?=printPromo($descriptPactive)?></div>
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
                            <div class="icFolder"><img src="<?=IMG."icFolder.png"?>" alt=""></div>
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
                                            <div class="image norm "><div class="im"><img src="<?=IMG."icEtu.png"?>" alt=""></div></div>
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
                                <div class="linkPage">
                                    
                                   <select name="eleBypage" id="">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                </select>
                                <span>items per page</span>
                                </div>
                                <div class="suiPre">
                                    <span>page <?php echo $_GET['pageAff']." of ".$totalPage?></span>
                                    <a class="pre" style="text-decoration: none; color:black;margin:5px;font-weight:bold;" href="<?php if($pageEtu > 1) echo "?page=$page&pageAff=" . ($pageEtu - 1); ?>"><</a>
                                    <?php
                                        for ($i = 1; $i <= $totalPage; $i++)
                                        {
                                            ?>
                                                <a style="text-decoration: none; color:black;margin:5px;font-weight:bold;" href="?page=<?=$page?>&pageAff=<?=$i?>"><?=$i?></a> 
                                           <?php
                                        }
                                     ?>
                                    <a class="sui " style="text-decoration: none; color:black;margin:5px;font-weight:bold;" href="<?php if($pageEtu < $totalPage) echo "?page=$page&pageAff=" . ($pageEtu + 1); ?>">></a>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>


