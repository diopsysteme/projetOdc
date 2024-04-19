


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
.page .bmid .cont.dash{
flex-direction: column;
position: relative;
justify-content: start;
}
.page .bmid .cont.dash .listCrud{
    width: 95%;
    height: 20%;
    display: inline-flex;
    margin: 1%;
}
.page .bmid .cont.dash .listCrud .list{
    display: flex;
    align-items: center;
    font-size:calc(1vh + .5vw);
    font-weight: bold;
}
.page .bmid .cont.dash .listCrud .crud{
    display: inline-flex;
    justify-content: space-around;
    justify-content: flex-end;
    position: relative;
    gap: 2%;
}
.page .bmid .cont.dash .listCrud .crud form{
    margin: 0;
    width: 45%;
    background-color: aliceblue;
    flex-direction: row;
    align-items: center;
    justify-content: center;

}
.page .bmid .cont.dash .listCrud .crud .input{
    display: inline-flex;
    height: auto;
    width: 80%;
    height: 100%;
    align-items: center;
    justify-content: center;
}
.page .bmid .cont.dash .listCrud .crud .input input{
    width: 90%;
}
.page .bmid .cont.dash .listCrud .crud form div:nth-child(2){
    position: relative;
    display: flex;
    width: 10%;
    height: 100%;   
    justify-content: center;
    span{
        display: inline-block;
        width: 100%;
        button{
            width: 100%;
            .fa-solid{
                color: #35867c;
            }
        }
    }
}
.page .bmid .cont.dash .listCrud .crud button{
    width: 20%;
    height: 100%;
    font-size:calc(1vh + .5vw);
    font-weight: bold;
    color: white;
    background-color: rgb(53, 134, 124);
    border-radius: 1vh;
}
.page .bmid .cont.dash .listPromo{
    width: 95%;
    background-color:aliceblue ;
    height: 25%;
    display: inline-flex;
    align-items: center;
    div{
        display: flex;
        justify-content: center;
        font-size:calc(1vh + .5vw);
        font-weight: bold;
        position: relative;
        height: 100%;
        align-items: center;
    }

}
.page .bmid .cont.dash .listPromo.element{
    background-color: white;
}

.page .bmid .cont.dash .listPromo.element span{
    display: inline-block;
    width: 20%;
    height: 100%;
}
.P2:checked {
    color: red;
    <?php  ?>
    
}
        </style>

            <div class="bint">
                <div>PROMOTION</div>
                <div>Promos > Création</div>
            </div>
            <div class="bmid">
                <div class="cont dash">
                    <div class="listCrud">
                       <div class="list">Liste Des Promotions <span class="colorG">(<?=count($promos)?>)</span></div>
                       <div class="crud">
                        <form action="" method="post">
                            <div class="input">
                                <input type="search" value="<?=$_POST["search"]?>"  name="search" required placeholder="Recherche par matricule">
                            </div>
                            <div><span class=""><button  style="background-color:inherit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span></div>
                        </form>
                        <button>+ Nouvelle</button>
                       </div>
                    </div>
                    <div class="listPromo">
                        <div>Libellé</div>
                        <div>Date Debut</div>
                        <div>Date Fin</div>
                        <div>Actions</div>
                    </div>
                    <?php
                        foreach ($promos as $promo)
                        {
                            ?>
                                <div class="listPromo element">
                                    <div class="<?php if($namePactive==$promo["name"]) echo "colorG"; else echo "red"; ?>"><span><img src="<?php echo IMG.'promo.png' ?>" alt=""></span><?=$promo["description"]?></div>
                                    <div > </div>

                                    <div class="image norm "><?=convdate($promo["dateDeb"])?></div>
                                    <div class="nom norm "><?=convdate($promo["dateFin"])?></div>
                                    <div class=""><form action="" method="post">
                                        <input <?php if($promo["etat"]=="active") echo "checked"; ?> type="submit" id="<?=$promo["name"]?>" name="activePromo" value="<?=$promo["name"]?>" class="buttonSub"> 
                                        <input <?php if($promo["etat"]=="active") echo "checked"; ?> type="checkbox" id="<?=$promo["name"]?>" name="activePromo" value="<?=$promo["name"]?>" class="inputChange"> 

                                </form></div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <style>
                .buttonSub{
                    position: absolute;
                    background-color: transparent;
                    border: none;
                    color: transparent;
                    cursor: pointer;
                    width: 4vh;
                    height: 4vh;
                }
                .inputChange{
                    
                    width: 4vh;
                    height: 4vh;
                }
            </style>