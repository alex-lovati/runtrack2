<?php 
var_dump($_GET);
foreach($_GET as $value){
    // 9"<br/>";
}
?>

<form action="../job01/index.php" method="GET">
<label for="fname">first name : </label>
<input type="text" id="fname" name="fname"> <br> <br>
<label for="fname">last name : </label>
<input type="text" id="lname" name="lame"> <br> <br>
<input type="submit" value="submit">
</form>