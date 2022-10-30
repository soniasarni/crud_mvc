<?php


// CONNEXION à la base de données 

  $localhost="localhost";
  $user ="root";
  $password = "";
   $database ="database_test";

  $connect =mysqli_connect($localhost,$user ,$password,$database);
  if($connect){
      echo("connected");
  }else{ 
      echo"no connected"; 
 }






?>