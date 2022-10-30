<?php

include("connexion.php");


//echo"isertionphp";
$nom = $_GET['nom'];
$email = $_GET['email'];
$message =htmlspecialchars($_GET['message'],ENT_QUOTES);

//echo "<p>".$nom."  ". $email." ". $message."</p>";

//echo $nom ." ".$email." ".$contenu;

$sql = "INSERT INTO message (nom,email,message)
VALUES ('".$nom."', '".$email."', '".$message."')";

if ($conn->query($sql) === TRUE) {
 // echo "load.php";
 require("page.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>