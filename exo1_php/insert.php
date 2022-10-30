<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/insert.css">
    
    <title>insertiont</title>
</head>
<body>
<?php
include("connexion.php");
//formulaire dinscription
    $nom=strtolower($_POST['nom']);
    $prenom=strtolower($_POST['prenom']);
    $email=strtolower($_POST['email']);
    $password=$_POST['password'];
    $telephone=($_POST['telephone']);
    $adresse=strtolower($_POST['adresse']);
    $query= "INSERT INTO client(nom,prenom,mail,pwd,phone,adress)VALUE('$nom','$prenom','$email','$password','$telephone''$adresse')";
    
    ECHO   $nom,$prenom,$email,$password,$telephone, $adresse;
    mysqli_query($connect,$query);
   
   echo("record inserted=".mysqli_affected_rows($connect));
   mysqli_close($connect);

    
    
    
    echo "<br><br>";







?> 
<div class="form">
<form class="row g-3" action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST">">
<h4>formulaire d'inscription</h4>
<div class="row">
  <div class="col">
  <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" placeholder="Nom"name="nom">
  </div>
  <div class="col">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div>
</div>
<div class="row">
<div class="col">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4"name="email">
  </div>
  <div class="col">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4"name="password">
  </div>
</div>
<div class="row">
  <div class="col">
    <label for="telephone" class="form-label">telephone</label>
    <input type="number" class="form-control" name="telephone">
  </div>
  <div class="col">
    <label for="adresse" class="form-label">adresse</label>
    <input type="text" class="form-control" name="adresse" placeholder="35000 ville">
  </div>
</div>
<div class="col-auto">
    <button type="submit" name="submit"class="btn btn-primary">Save</button>
  </div>
</form>
</div>
</body>
</html>