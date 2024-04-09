<?php
if (isset($_POST['nbr'])){
    if(empty($_POST['nbr'])){
        echo "Veuillez saisir un nombre";
    }
    else{
        $nbr = $_POST['nbr'];
        echo"<ul>";
        for($i=0;$i<$nbr;$i++){
            echo "<li> $i</li>";

        }
        echo"</ul>";
    }
}
?>
<form action="" method="post">
    <input type="number" name="nbr" required placeholder="donner un nbr">
    <button type="submit">send</button>
</form>
