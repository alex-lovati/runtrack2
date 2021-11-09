<?php 
var_dump($_POST);
foreach($_POST as $value){
}
?>

<form action="../job03/index.php" method="POST">
<label for="fname">first name : </label>
<input type="text" id="fname" name="fname"> <br> <br>
<label for="fname">last name : </label>
<input type="text" id="lname" name="lame"> <br> <br>
<input type="submit" value="submit">
</form>