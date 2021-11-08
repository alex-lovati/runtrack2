<form method="GET" action="">
    <label>Nombre</label>
    <input type="text"  name="Nombre">
    <input type="submit" value="Envoyer">
</form>
<?php


if ($_GET==true)
if ($_GET["Nombre"]%2==0){
    echo "Nombre pair";
}

else{
    echo "Nombre impaire";
}

?>