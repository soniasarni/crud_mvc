



<?php

echo 'bonjour'.htmlspecialchars($_GET["name"])."!";

var_dump(isset($_GET["name"]));
//isset recupere mm les valeurs nulls

if( !empty($_GET["name"]) && !empty($_GET["age"]) ) 
{
echo "Welcome ". $_GET['name']. "<br />";
echo "You are ". $_GET['age']. " years old.";
 }
else
{
    include('page.html');
}

?>





