<div class="bint">
                <div>PRESENCES</div>
                <div>Etudiants > Presences</div>
            </div>
<div class="bmid bmid2">
                <div class="cont absence  ">
                    <div class="contInp2">

                        <form action="?page=<?=$page?>&pageAff=1" method="post" class="filter">
                            <select name="statut"  id="" class="Statut">
                            <option value="" > Statut </option>
                            <option value="present" <?php if($_POST["statut"]=="present") echo "selected"?>> Présent </option>
                            <option value="absent"  <?php if($_POST["statut"]=="absent") echo "selected"?>> Absent </option>
                            </select>
                            <select name="referentiel" id="" class="Referentiel">
                            <option value="" > Référentiels </option>
                            <option value="devweb"  <?php if($_POST["referentiel"]=="devweb") echo "selected"?>> Dev Web/Mobile </option>
                            <option value="devdata"  <?php if($_POST["referentiel"]=="devdata") echo "selected"?>> Developpement Data </option>
                            <option value="refdig"  <?php if($_POST["referentiel"]=="refdig") echo "selected"?>>Référent Digital</option>
                            <option value="aws"  <?php if($_POST["referentiel"]=="aws") echo "selected"?>> AWS </option>
                            <option value="hackeuse"  <?php if($_POST["referentiel"]=="hackeuse") echo "selected"?>> Hackeuse </option>
                            </select>
                            <input type="date" name="jour" placeholder="Date" value="<?= date('Y-m-d') ?>">
                            <button type="submit" class="butFilt">Rafraichir</button>
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
                                            <div class="image colorG "><?=$etudiant["matricule"]?></div>
                                            <div class="nom norm colorG"><?=$etudiant["nom"]?></div>
                                            <div class="prenom "><?=$etudiant["prenom"]?></div>
                                            <div class="mail "><?=$etudiant["matricule"]?></div>
                                            <div class="genre norm "><?=$etudiant["referentiel"]?></div>
                                            <div class="numero "><?=$etudiant["numero"]?></div>
                                            <div class="action norm "><?php if($etudiant["statut"]=="present"){?><div class="act"><?=$etudiant["statut"]?></div><?php } else {?><div class="act red"><?=$etudiant["statut"]?></div><?php }?></div>
                                        </div>
                                    <?php
                               }
                                ?>
                        </div>
                        <div class="paginate">
                                <div class="linkPage" style="margin:5px">
                                    
                                   <select name="eleBypage" id="">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                </select>
                                <span>items per page</span>
                                </div>
                                <div class="suiPre">
                                    <span>page <?php echo $_GET['pageAff']." of ".$totalPage?></span>
                                    <a class="pre" style="text-decoration: none; color:black;margin:5px;font-weight:100;" href="?page=<?=$page?>&pageAff=<?=$pageEtu-1?>"><</a>
                                    <?php
                                        for ($i = 1; $i <= $totalPage; $i++)
                                        {
                                            ?>
                                                <a style="text-decoration: none; color:black;margin:5px;font-weight:100;" href="?page=<?=$page?>&pageAff=<?=$i?>"><?=$i?></a> 
                                           <?php
                                        }
                                     ?>
                                    <a class="sui " style="text-decoration: none; color:black;margin:5px;font-weight:100;" href="?page=<?=$page?>&pageAff=<?=$pageEtu+1?>">></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>