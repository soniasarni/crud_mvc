<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<b>mon premier programme</b><br>

<?php
require("header.html");
echo "hello php ";
// phpinfo();fonction qui affiche le systeme localhoste est remplace
//r par le nom du domain adresse ip
echo"<br>";
define("MA_constant","je suis la constante");
echo MA_constant;
echo '<br><hr>convertir le type de variable le cast';
$a =12;
$b= "string";
$b=(string)$a;
var_dump($b);
$tab1=array(12,13,8,15.6);
var_dump($tab1);
echo '<br><hr>';
$tab2[]=5;
$tab2[]=6;
$tab2[]=19;
var_dump($tab2);
echo '<br><hr>';


$tab1= array(12,13.5,8,15.6);
var_dump ($tab1);


//parcours d'un tableau indexé
$somme=0;
for ($i=0; $i < count($tab1) ; $i++) { 
	$somme=$somme + $tab1[$i];

}

echo $somme;
$tab=array("etudiant1"=>8,
"etudiant2"=>16,
"etudiant3"=>15);
var_dump($tab);
foreach ($tab as $key => $value) {
    if( $value>=10){
ECHO $key.'  : '.$value;
ECHO"<br>";
    };
};
//SORT,rsort
include("footer.html");


$a=15;
if (($a % 3==0) and ( $a % 5==0)) :
   echo"$a .EST UN MULTIPLE DE 3 ET DE 5";
else:
    echo"$a .n'EST pas UN MULTIPLE DE 3 ET DE 5";
endif;

// $a=rand(100,1000);
// $b=rand(100,1000);
// $c=rand(100,1000);
// while($a%2!=0 or $b%2!=0 and $c%2!=0){
//     echo $a." ". $b, $c;
//     ECHO"<br>";
// }

// $nbre=200;
// $I=rand(100,1000);
// $compt=1;
// while($I!=$nbre){
//     $I=rand(100,1000);
//     echo $I;
//     $compt++;

// }echo $compt;

// $nbr = 234;
// $compt=1;

// $a=rand(100, 1000);

// while($a != $nbr){
//     $a=rand(100, 1000);
//     echo $a.'<br>';
//     $compt++;
// }
// echo 'la valeur est toruvée dans la tentative n'.$compt;


// **********************************avec le boucle do while********************
// do {
//     $a=rand(100, 1000);
//     echo $a.'<br>';
//     $compt++;
// } while ($a != $nbr);

// echo 'la valeur est toruvée dans la tentative n'.$compt;


// **********************************avec le boucle for********************

// for($compt =1; $nbr != $a; $compt++ ){
//     $a=rand(100, 1000);
//     echo $a.'<br>';
// }
// echo 'la valeur est toruvée dans la tentative n'.$compt;

function permut(&$a,&$b){
   $aux= $a;
   $a=$b;
   $b=$aux;


}
$a=5;
$b=8;
$varB=permut($a,$b);
echo'<br>';
echo $a,$b;
var_dump($varB);



function monAlert($MSG){
 echo'<script type="text/javascript">
 alert("hello je suis js"

 </script>';
}
?>
</body>
</html>