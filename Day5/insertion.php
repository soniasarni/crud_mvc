<?php

require("connexion.php");

$nom = $_GET['nom'];
$email = $_GET['email'];
$contenu = htmlspecialchars($_GET['contenu'], ENT_QUOTES); 
//echo $nom ." ".$email." ".$contenu;

$sql = "INSERT INTO message (nom,email, contenu)
VALUES ('".$nom."', '".$email."', '".$contenu."')";

if ($conn->query($sql) === TRUE) {
    require("data.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>