<?php
Class SimpleClasse{

//private on ne peut pas acceder à la variable
public $var="valeur par defaut";

function afficher(){
    echo $this->var;
}



}
//objt1 EST une instance de la class
$objt1= new SimpleClasse();
$objt1->afficher();
echo"<br>";
 $objt1->var="hello";
echo $objt1->var










?>