<?php
$localhost="localhost";
$user ="root";
$password = "";
$database="mydb";

$connect = new mysqli($localhost,$user,$password,$database);
if($connect){
    echo("connected");
}else{ 
    echo"no connected"; 
}
$req1= "DELETE FROM `myguests` WHERE id like (firstname,lastname,email,reg_date) VALUES ('sonia','sarni','sonia@son.jj','2000/02/11')";
$rest=$connect->query($req1);
if($rest==null){
    echo "probleme d'insertion";
}else{
    echo "insertion reçu";
}