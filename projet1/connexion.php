<?php


// CONNEXION à la base de données 

  $localhost="localhost";
  $user ="root";
  $password = "";


  $connect = new mysqli($localhost,$user ,$password,$database);
  if($connect){
      echo("connected");
  }else{ 
      echo"no connected"; 
 }

$sql="create database if not exists mydb";
$res=$connect->query($sql);
if($res==true){
    echo"db vient d'etre crée ";
}else {
    echo "erreur dana la création de base" ;
    echo  $connect->error;
}






?>