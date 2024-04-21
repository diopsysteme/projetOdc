

<div class="bint">
                <div>PROMOTION :  <?=printPromo($descriptPactive)?></div>
                <div>Promos > Création</div>
            </div>
            <div class="bmid">
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
                        <form action="" method="post">
                            <div class="blockInp">
                            
                                <label for="">Libelle  <span class="red"> <?=$_SESSION["error"]["libelle"] ?></span> </label>
                                <div class="input">
                                    <input type="text" name="libelle" value="<?=$_POST['libelle']?>"  placeholder="Entrer le libellé"><span class="red" style="position: absolute;left:calc(5vw + 9vh);top:35%"> *</span>
                                </div>
                               
                            </div>
                            <div class="blockInp col">
                                <div>
                               
                                    <label for="">Date Debut  <span class="red">  <?=$_SESSION["error"]["dateDeb"] ?></span></label>
                                <div class="input">
                                    <input type="date" name="dateDeb" value="<?=$_POST['dateDeb']?>"  placeholder="Recherche par matricule"><span class="red" style="position: absolute;left:calc(2vw + 9vh);top:35%"> *</span>
                                </div>
                                

                                </div>
                               <div>
                               
                                <label for="">Date Fin <span class="red">  <?=$_SESSION["error"]["dateFin"] ?></span></label>
                                <div class="input">
                                    <input type="date" name="dateFin" value="<?=$_POST['dateFin']?>" placeholder="Recherche par matricule"><span class="red" style="position: absolute;left:calc(2vw + 9vh);top:35%"> *</span>
                                </div>
                               </div>
                            </div>
                            <div class="blockInp col col2">
                               <div  class="end"><button  type="submit" name="addRef">Ajouter Referentiels</button></div>
                               <div class="end"><button type="submit" name="create">Creer Promotion</button></div>
                            </div>
                        </form>
                        <div class="bold">Referentiels</div>
                    </div>
                </div>
            </div>
       
            <?php 
          ?>