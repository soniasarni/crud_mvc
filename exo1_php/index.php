
<!DOCTYPE html>
<html lang="fr"
<head>
<meta charset="UTF-8">
<meta name="description" content="">
    <title>ma page html</title>
</head>
<body>
<a href=""></a>
<h1>ma page HTML</h1>
<?php 
include("index1.html");?>
<p><a href="http://google.fr"> c'est moi</a></p>
 les foctions get set -->
<?php
echo("les foctions get et set<br>");
echo" <br>les foctions get<br>"; ?>
<form action ="code.php"methode="GET">
    <input type="text" name="name">
    <input type="text" name="password">
    <button type="submit" name= "submit">click</button>
</form>
<br><br><br> 
<!-- 
CONNEXION à la base de données -->
<?php
 include("connexion.php");
//enregister des données dans une DB

  echo "<br>ENVOYER DE DATA DANS MA BASE <br>";
  if(isset($_POST['submit'])){
      $name=strtolower(htmlspecialchars($_POST['name']));
      $password=htmlspecialchars($_POST['password']);
      $message=strtolower(htmlspecialchars($_POST['message']));
      $query= "INSERT INTO test (name,password,message) value ('$name','$password','$message')";
      mysqli_query($connect,$query);
      //FAIRE DES FILTRES
      echo "<br>FAIRE DES FILTRE POUR VALIDER 
      UN CHAMPS FILTER_var(nom_declar_var,filter_validate_int <br>";
      if(filter_var($password,FILTER_VALIDATE_INT)){
          echo "true";
      }else{
          echo "false";
      }

  }
  echo "<br><br>";
   echo ("le code d'un formulaire qui 

   ne change pas de page <br>dans action il faut preciser ");
   echo "<br><br>";
   echo ("filter_sanitize_email ou number_int,
    url filtre et recupere  que les données essentienls   ")
   ?> 
 <form action ="" method ="POST">
     <input type="text" name="name">
     <input type="text" name="password">
     <textarea rows="2" cols="2" name="message"></textarea>
     <button type="submit" name= "submit">SUBMIT</button>
 </form>; 
<!-- CONDITION DU FORMULAIRE -->

<?php
$connect =mysqli_connect($localhost,$user ,$password,$database);

// if(isset($_POST['submit'])){
    $nomI=strtolower($_POST['nomI']);
    $prenomI=strtolower($_POST['prenomI']);
    $emailI=strtolower($_POST['emailI']);
    $passwordI=$_POST['passwordI'];
    $contenuI=strtolower($_POST['contenuI']);
    $query= "INSERT INTO personne(nom,prenom,mail,pwd,msg)VALUE('$nomI','$prenomI','$emailI','$passwordI','$contenuI')";
    
    ECHO("'$nomI','$prenomI','$emailI',$passwordI,$conteuI");
    mysqli_query($connect,$query);
   
   echo("record inserted=".mysqli_affected_rows($connect));
   mysqli_close($connect);

    
    
    
    echo "<br><br>";
    
    ?>
<form action ="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST">
    <input type="text" name="nomI">
    <input type="text" name="prenomI">
    <input type="text" name="emailI">
    <input type="text" name="passwordI">
    <textarea rows="2" cols="2" name="contenuI"type="text"></textarea>
    <button type="submit" name= "submit">envoyer</button>
</form>

</body>
</html>
