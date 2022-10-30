
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action = "traitement_form.php" method = "GET">
Name: <input type = "text" name = "name" />
Age: <input type = "text" name = "age" />
<input type = "submit" /> 

</form>

<?php




if( !empty($_POST["name"]) && !empty($_POST["age"]) ) 
{
echo "Welcome ". $_POST['name']. "<br />";
echo "You are ". $_POST['age']. " years old.";
 }
else
{
    include('page.html');
}







?>
</body>
</html>
