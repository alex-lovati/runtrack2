
<form method="POST" action="">
    <label>username</label>
    <input type="text"  name="username">
    <label>password</label>
    <input type="text"  name="password">
    <input type="submit" value="Envoyer">
</form>
<?php

$p1= "C’est pas ma guerre";
$p2= "Votre pire cauchemar";
if ($_POST==true){
if ($_POST["username"]=="John" && $_POST["password"]=="Rambo"){
echo $p1;
}
else{
    echo $p2;
}
}  
?>