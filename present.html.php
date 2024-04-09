<div class="bmid bmid2">
                <div class="cont absence  ">
                   
                    <div class="contInp2">

                        <form action="template2.php?page=5&pageAff=1" method="post" class="filter">
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
                            <input type="date" name="jour"  placeholder="Date"> 
                            <button type="submit">Rafraichir</button>
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
                                            <div class="action norm "><?php if($etudiant["statut"]==1){?><div class="act"><?=$etudiant["statut"]?></div><?php } else {?><div class="act redBak"><?=$etudiant["statut"]?></div><?php }?></div>
                                        </div>
                                    <?php
                               }
                                ?>
                        </div>
                        <div class="paginate">
                            <div class="suiPre">
                                    <a class="pre" href="?page=5&pageAff=<?=$pageEtu-1?>"><</a>
                                    <a class="sui" href="?page=5&pageAff=<?=$pageEtu+1?>">></a>
                                </div>
                                <div class="linkPage">
                                    <?php
                                    
                                        for ($i = 1; $i <= $totalPage; $i++)
                                        {
                                            ?>
                                                <a href="?page=5&pageAff=<?=$i?>"><?=$i?></a> 
                                           <?php
                                        }
                                     ?>
                                </div>
                                <div class="suiPre">
                                    <a class="pre" href="?page=5&pageAff=<?=$pageEtu-1?>"><</a>
                                    <a class="sui" href="?page=5&pageAff=<?=$pageEtu+1?>">></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>