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
$crTable = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
        )";

        $result = $connect->query($crTable);
    if (!$result) {
        echo "creation table is rejeted";
    } else{
        echo "creation table is successful";
    }











?>