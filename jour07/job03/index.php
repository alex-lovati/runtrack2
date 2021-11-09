<?php session_start(); ?>

<!DOCTYPE html>
        <form action="index.php" method="post">
        <label for="prenom">Prénom:</label><br/>
        <input type="text" name="prenom" id="prenom">
        <label for="valider"></label>
        <input type="submit" name="valider">
        <label for="reset"></label>
        <input type="submit" name="reset" value="reset">
    </form><br/>

    <?php
    if (isset($_POST['reset'])) {
        $_SESSION['prenom']=null; 
    }
    if (isset($_POST) && isset($_POST['prenom'])) {
        $_SESSION['prenom'] = $_SESSION['prenom']. "<br/>".$_POST['prenom'];
    } 
    echo $_SESSION['prenom'];
?>
