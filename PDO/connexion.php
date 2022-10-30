<?php

  $server="localhost";
  $user ="root";
  $password = "";
  $database="pdodata";
  
  

 try{$con = new PDO("mysql:host=$server;dbname=$database",$user,$password);
      //echo("connected successfully");

} catch (PDOException $e) {
    echo "<br>".$e->getMessage();
}

?>







 