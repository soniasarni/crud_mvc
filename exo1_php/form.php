<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (!empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['age']) && !empty($_POST['pays'])) {
?>


<html>
<table style="border: solid 1px">
	<tr>
		<td>Prénom</td>
		<td><?php echo $_POST['prenom'];?></td>
	</tr>
	<tr>
		<td>Mail</td>
		<td><?php echo $_POST['mail'];?></td>
	</tr>
	<tr>
		<td>Age</td>
		<td><?php echo $_POST['age'];?></td>
	</tr>
	<tr>
		<td>Sexe</td>
		<td><?php echo $_POST['sexe'];?></td>
	</tr>
	<tr>
		<td>Pays</td>
		<td><?php echo $_POST['pays'];?></td>
	</tr>
</table>
</html>
<?php
}
else {
	include("form.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<table border=1 width="400">
	<caption><b> Confirmation de vos coordonnées</b></caption>

 <?php 
//UNE auntre façon de recuperer les données

//var_dump ($_POST);

// foreach ($_POST as $key => $value) {
// 	if ($key!='envoi'){
// 	echo "<tr><td> <b>$key:</b>  </td>";
// 	echo "<td>$value </td></tr>";
//      }
// }


?> 
