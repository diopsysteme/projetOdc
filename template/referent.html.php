<div class="bint">
    <div>PROMOTION : <?= printPromo($descriptPactive) ?></div>
    <div>Promos > Création</div>
</div>
<div class="bmid ref1">
    <div class="divRef">
        <?php
        foreach ($referentielsFiltres as $referentiel) {
            if ($referentiel['etat'] == "active") { ?>
                <div>
                    <div class="point">...</div>
                    <div class="contInRef">
                        <div class="photo"><img src="<?= IMG . 'referentiel/' . $referentiel['image'] ?>" value="" alt=""></div>
                        <div class="nomRef"><?= $referentiel['nom'] ?></div>
                        <div class="statutRef colorBase"><?= $referentiel['etat'] ?></div>
                    </div>
                </div>
        <?php }
        }
        ?>
    </div>
    <div class="divRef">
        <div class="specRef">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="error ed"><?= $_SESSION["errord"]["file"] ?></div>
                <div class="nomRef">Nom Referentiel</div>

                <div class="inpRef">
                    <label for="">Libellé <div class="error ed"><?= $_SESSION["errord"]["lib"] ?></div> </label>
                    <div class="input">
                        <span class="icInpRef" style="position: absolute;left:calc(.5vw + .5vh);top:35%"><i class="fa-regular fa-user"></i></span>
                        <input type="text" name="libellé" value="<?= $_POST["libellé"] ?>" placeholder="Recherche par matricule">
                    </div>
                </div>
                <div class="inpRef">
                    <label for="">Description <div class="error ed"><?= $_SESSION["errord"]["desc"] ?></div></label>
                    <div class="input">
                        <span class="icInpRef" style="position: absolute;left:calc(.5vw + .5vh);top:35%"><i class="fa-regular fa-user"></i></span>
                        <input type="textarea" name="description" value="<?= $_POST["description"] ?>" placeholder="Recherche par matricule">
                    </div>
                </div>
                <div class="inpRef special">
                    <input id="activePro" type="checkbox" <?php if ($_POST["etat"] == "on") echo "checked"; ?> name="etat">
                    <label for="activePro" class="toggle"></label>


                    <?php if (isset($_SESSION["errord"]["img"])) { ?><?php } ?>
                    <img id="previewImage" src="<?= IMG . 'referentiel/default.jpeg' ?>" alt="Aperçu de l'image" style="width: 3vw; height: 3vw;border-radius:100%">
                    <div class="subImg"> <label for="">
                            <div class="error ed"><?= $_SESSION["error"] ?></div>
                        </label>
                        <div class="input">
                            <input type="file" name="img" id="uploadInput" placeholder="Recherche par matricule">
                        </div>

                    </div>
                </div>
                <div class="error ed spec"><?= $_SESSION["errord"]["img"] ?></div>
                <div class="btn"><button name="addFiliere" type="submit">Enregistrer</button></div>
            </form>
        </div>
    </div>
</div>
<script>
    const uploadInput = document.getElementById('uploadInput');
    const previewImage = document.getElementById('previewImage');

    uploadInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(event) {
            previewImage.src = event.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>
<style>
    .page .bmid .divRef .specRef form .inpRef.special .toggle {
        width: 15%;
        height: 65%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10vh;
    }

    .page .bmid .divRef .specRef form .inpRef.special input {
        display: none;
    }

    .toggle {
        position: relative;
        display: inline-block;
        width: 50%;
        height: 90%;
        background-color: #ccc;
        border-radius: 15px;
        transition: background-color 0.3s;
    }

    .toggle::before {
        content: "";
        position: absolute;
        width: 50%;
        height: 90%;
        border-radius: 50%;
        background-color: white;
        left: 2px;
        transition: transform 0.3s;
    }

    input[type="checkbox"]:checked+.toggle {
        background-color: #4caf50;
        /* Change la couleur de fond lorsqu'il est coché */
    }

    input[type="checkbox"]:checked+.toggle::before {
        transform: translateX(30px);
        /* Déplace le bouton sur la droite lorsqu'il est coché */
    }

    /* .page .bmid .divRef .specRef form .inpRef.special .toggle::before{
        content: "";
        width: 50%;
        height: 100%;
        border-radius: 10vh;
        background: black;
        position: absolute;
        left: 0;
    }
    .page .bmid .divRef .specRef form .inpRef.special .toggle input:checked + 
    .page .bmid .divRef .specRef form .inpRef.special .toggle::before {
    transform: translateX(100px);
}*/

    .toggle {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
        background-color: grey;
    }

    .page .bmid .divRef .specRef form .inpRef label.libImg {
        width: 25%;
        height: 60%;
        position: absolute;
        top: 10;
        left: 2%;
        display: flex;
        align-items: center;
        justify-content: end;

    }

    .page .bmid .divRef .specRef form .error {
        height: 2%;
        margin: 0;
    }

    input[type="checkbox"] {
        background-color: rgb(53, 134, 124);
        /* Couleur de fond lorsque le checkbox est coché */
    }

    .page .bmid.ref1 {
        display: inline-flex;
    }

    .page .bmid .divRef {
        width: 100%;
        height: 100%;
        background-color: inherit;
        position: relative;
        padding: 0 0 0;
        display: block;
        justify-content: center;
        align-items: center;
    }

    .page .bmid .divRef:nth-child(2) {
        width: 50%;
        align-items: center;
    }

    .page .bmid .divRef div {
        position: relative;
        border-radius: calc(1vh + .5vw);
        display: inline-block;
        width: calc(17vw);
        height: calc(10vw + 18vh);
        background-color: white;
        margin-right: calc(.5vh + .5vw);
        margin-bottom: calc(.2vh + .2vw);
    }

    .page .bmid .divRef .specRef {
        width: 100%;
    }

    .page .bmid .divRef div .point {
        font-size: calc(2vh + 1vw);
        font-weight: bold;
        width: 20%;
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page .bmid .divRef div .contInRef {
        position: relative;
        width: 100%;
        height: 80%;
    }

    .page .bmid .divRef div .contInRef .photo {
        width: 100%;
        height: 60%;
        border-radius: calc(1vh + .5vw);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page .bmid .divRef div .contInRef .photo img {
        padding: calc(1vh + .5vw);
    }

    .page .bmid .divRef div .contInRef .statutRef,
    .page .bmid .divRef div .contInRef .nomRef {
        position: relative;
        width: 100%;
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: calc(1vh + .5vw);
        font-weight: bold;
    }

    .page .bmid .divRef .specRef form {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .page .bmid .divRef .specRef form div {
        width: 90%;
        height: 15%;
        display: flex;
        align-items: center;
        position: relative;

    }

    .page .bmid .divRef .specRef form .error.spec {
        width: 50%;
        height: 5%;
    }

    .page .bmid .divRef .specRef form .error {
        height: auto;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: calc(.5vh + .5vw);
        font-weight: bold;
        color: red;
    }

    .page .bmid .divRef .specRef form .inpRef label {
        display: inline-flex;
        width: 100%;
        justify-content: space-around;

        div {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .page .bmid .divRef .specRef form .inpRef.special {
        width: 89%;
        height: 16%;
        display: flex;
        margin-top: 1%;
        flex-direction: row;
        position: relative;
        justify-content: space-between;

        div {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .page .bmid .divRef .specRef form .inpRef.special .subImg {
        width: 60%;
        height: 75%;
        display: flex;
        margin: 0;
        justify-content: ;
        align-items: end;
    }

    .page .bmid .divRef .specRef form .inpRef.special div {
        height: 90%;
        display: flex;
        position: relative;
        font-size: 1vh;
        flex-direction: column;

    }

    .page .bmid .divRef .specRef form .inpRef {
        position: relative;
        height: 20%;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        margin: 0;

    }

    .page .bmid .divRef .specRef form .inpRef label {
        margin-left: 1%;
        font-size: calc(1vh + .5vw);
        align-items: start;
    }

    .page .bmid .divRef .specRef form .inpRef .input {
        height: 80%;
        width: 100%;
        border: solid 1px #aaa;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .page .bmid .divRef .specRef form .inpRef.special .input {
        display: flex;
        height: 100%;
        width: 93%;
        align-items: center;
        justify-content: center;
    }

    .page .bmid .divRef .specRef form .inpRef.special .input input {
        width: 80%;
        height: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page .bmid .divRef .specRef form .inpRef .input input {
        width: 80%;
    }

    .page .bmid .divRef .specRef form .nomRef {
        font-size: calc(1vh + 1vw);
        font-weight: bold;
    }

    .page .bmid .divRef .specRef form .btn {
        width: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: default;
    }

    .page .bmid .divRef .specRef form .btn button {
        width: 50%;
        height: 80%;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        background-color: rgb(53, 134, 124);
        color: white;
    }

    .colorBase {
        color: rgb(53, 134, 124);
    }
</style>