<?php
include("db_conf.php");
echo "connexion";


$mail=htmlspecialchars(strtolower($_POST['mail']));
$pwd=htmlspecialchars(strtolower($_POST['pwd']));



$req2="SELECT * FROM users WHERE (email,passwd)" VALUES
('$mail','$pwd')";
$rest=$con->query($req2);
if ($rest==true){
    echo"ajouté avec succés";
}else {
    echo"errorrrrrr";
}











?>