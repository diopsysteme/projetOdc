


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

            <div class="bint">
                <div>PROMOTION : <?=printPromo($descriptPactive)?></div>
                <div>Promos > Création</div>
            </div>
            <div class="bmid">
                <div class="cont promo2">
                    <div class="vertical">
                        <div class="vertInt">
                            <div>1</div>
                            <div></div>
                            <div>2</div>
                        </div>
                        <div class="vertText">
                            <div>Promotion</div>
                            <div></div>
                            <div>Referentiel</div>
                        </div>
                    </div>
                    <div class="contInp2">
                        <div style="height:25vh;" class="labSelect">Vous allez ajouter des referentiels à la  <span class="colorG"><?= $_SESSION["promoNew"]["description"]?></span></div>
                        <form action="" method="post">
                            <?php 
                            var_dump($_POST);
                            function filtByRef($tabs,$name) {
                                $etudiants = array();
                                foreach($tabs as $tab) {
                                    if($tab["referentiel"]==$name) {
                                        $etudiants[]=$tab;
                                }
                            }

                            return count($etudiants);
                        }
                            $promoTochan=$_SESSION["promoNew"]["name"];
                            var_dump($promoTochan);
                                $uniques = uniqueRef($filieres);
                                if(stripos($unique["id"],$promoTochan)!=false) echo "checked";
                                if(stripos($promoTochan,$unique["id"])) echo "checked";
                                $etudiants=readCsv(FILE."student",".csv");
                                $etudiants=filterByprom($etudiants,$promoTochan);
                                $nbstudent=count($etudiants);
                                
                            $filieres=readCsv(FILE."referent",".csv");
                            $a=array();
                            foreach($filieres as $fil){
                                if (stripos($fil["promo"], $promoTochan) !== false)
                                {
                                    $a[]=$fil;
                                }
                            }
                                foreach ($uniques as $unique) {
                                    $checked = 0;
                                    foreach($a as $ref)
                                    {
                                        if($ref["nom"]==$unique["nom"]){
                                            
                                            $checked = 1;
                                            break;
                                        }
                                    }
                                    
                                    ?>
                            <div>
                                <input type="checkbox" <?php if($checked){echo "checked "; }  if(filtByRef($etudiants,$unique['nom'])&&$checked)echo ' disabled'; ?> value="<?=$unique['id']?>" name="<?=$unique['id']?>" id="<?=$unique['id']?>"> <label for="<?=$unique['id']?>"><?=$unique['nom']?></label>
                                <?php   if(filtByRef($etudiants,$unique["nom"])&&$checked){?>
                                    <input type="hidden" value="<?=$unique['id']?>" name="<?=$unique['id']?>" checked>
                                     <?php } ?>
                                    
                            </div>
                            
                            <?php } 
                                
                                if(isset($_POST["creer"])) {
                                    $tabpost = $_POST;
                                    $newTab=[];
                                    foreach($uniques as &$filier) {
                                        
                                            $id = $filier['id'];
                                            
                                            // Vérifier si l'ID de la filière inactive est présent dans le tableau POST
                                            if(isset($tabpost[$id])) {
                                                // if($filier['promo']!="inactif")
                                                // {
                                                //     echo"ajout";
                                                // }
                                                // else
                                                // {
                                                //     echo "mofif";
                                                // }
                                                    $filier["promo"]=$promoTochan;
                                                    $newTab[]=$filier;
                                            }
                                        
                                    }
                                    $mergedArray=[];
                                    $refuse=readCsv(FILE."referent",".csv");
                                    foreach($refuse as $refus){
                                        if($refus["promo"]!=$promoTochan)
                                        {
                                            $mergedArray[]=$refus;
                                        }
                                    }
                                   
                                     $mergedArray = array_merge($mergedArray, $newTab);
                                     var_dump($mergedArray);
                                     writeCsv(FILE."referent",".csv",$mergedArray);
                                     ?> <script> window.location.href ='?page=referent'</script><?php
                                    
                                }

                                ?>
                            <div class="blockInp">
                               <div class="end"><button type="submit">Back</button></div>
                               <div   class="end" ><button name="creer" type="submit">Creer</button></div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>