<?php
include("db_conf.php");
echo "inscription";

$nom=trim(htmlspecialchars(strtolower($_POST['nom'])));
$mail=trim(htmlspecialchars(strtolower($_POST['mail'])));
$pwd=trim(htmlspecialchars(strtolower($_POST['pwd'])));
//////////////////////////////////////
if($nom=="") {
    $error[] = "Vous devez saisir un nom d'utilisateur!"; 

 } else if($mail=="") {
  $error[] = "Vous devez saisir un email"; 

} else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $error[] = 'Vous devez saisir un email valide';

 } else if($pwd=="") {
    $error[] = "Vous devez saisir un mot de passe";

 } else if(strlen($pwd) <3) {
  $error[] = "Le pot de passe doit avoir au moins 6 caractères"; 

 } 
 

 
// Il n'y a pas d'erreurs
		// On prépare la requête
		// ON recherche si l'utilisateur existe déjà dans la base
		// La recherche se fait par username ou email
         	$req = $con->prepare("SELECT user_name,user_email FROM users WHERE user_name=:uname OR user_email=:umail");
        	$req->execute(array(':uname'=>$nom, ':umail'=>$mail));
         
		//On récupère le résultat
		$ligne=$req->fetch(PDO::FETCH_ASSOC);
    //si l'utilisateur n'existe pas dans la base alors $ligne égale à false
    
  var_dump($ligne);
    if ($ligne!=false){
    	echo "l'utilisateur existe déjà";
    }
    else
    {
    	$req2="INSERT INTO users(user_name,user_email,user_pass)VALUES
('$nom','$mail','$pwd')";
$rest=$con->query($req2);
if ($rest==true){
    echo"ajouté avec succés";
}else {
    echo"errorrrrrr";
}
    }
////////////////////////////////

   










?>