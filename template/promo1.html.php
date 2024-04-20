


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
                        <div style="height:25vh;" class="labSelect">Selectionnez un ou plusieurs ref</div>
                        <form action="" method="post">
                            <?php 
                                $uniques = uniqueRef($filieres);
                            ?>
                            <?php ?>
                            <div><input type="checkbox" name="" id="chek1"> <label for="chek1"> Dev Web/Mobile</label></div>
                            <div class="blockInp">
                               <div class="end"><button type="submit">Back</button></div>
                               <div class="end"><button type="submit">Creer</button></div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>