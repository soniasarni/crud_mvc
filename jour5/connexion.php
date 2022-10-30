<?php
// partie 1 : connexion à la base de données


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "jour_4";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    

  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>