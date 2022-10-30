<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="gkdb";

try{
    $con = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    echo("connected successfully");

} catch (PDOException $e) {
  echo "<br>".$e->getMessage();
}

?>