<table border=1>
	<thead>
		<th>arguments</th>
		<th>valeur</th>
	</thead>

<form method="POST" action="index.php">
    <label>nom</label>
    <input type="text"  name="lastname">
    <label>prenom</label>
    <input type="text"  name="firstname">
    <input type="submit" value="submit" >
</form>

<?php
	foreach ($_POST as $argument => $valeur) 
{
	echo
	"<tr>
		<td>".$argument."</td>
		<td>".$valeur."</td>
	</tr>";

}
?>