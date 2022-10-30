
<?php
// include("index1.html");

//SESSION//SESSION
session_start();
$_SESSION["name"]="formation php SESSION START <br><br>";
echo $_SESSION["name"];
//////////
echo "hello world<br>";

$prenom = "sarah";
echo "je m'appelle $prenom j'ai 35 ans<br><br>";
//constante
define("consta", "je suis une constante");
echo consta;
echo "<br><br>";


//CONCATENATION
$mot = 'I like';
$quoi = 'php';
echo $mot . " " . $quoi . "<br><br>";


//opperations
$a = 12;
$b = 23;
$c = $a + $b / 2;
$s = "string";
echo  "je suis une opperation $c <br><br><br>";
echo "vardump je suis un comparateur  de la valeur : ";
var_dump($a == $b);
echo "<br><br><br> je suis un comparateur de type !==";
var_dump($s !== $a);



//les conditions
echo "<br><br>les conditions un seul paramettre : ";
$nom = "sarah";
if ($nom == "mamie") {
    echo "les deux  valeurs sont differntes";
} else {
    echo "c'est mes raison de vivre";
};
echo "<br><br>les conditions plusieurs paramettres  :";
$nom="sarah";
$moyenne=17.5;
if($nom !=="sarra" || $moyenne!==16){
    ECHO"c'est la surette<br><br>";
}




//SWITCH
$mavar="cdiscount";
switch ($mavar) {
    case "amazon";
        echo 'ce n\'est pas le bon site';
        break;
    case"cdiscount";
    echo 'c\'est pas le bon site c\'etait cdiscount<br><br>';
    break;
    default:"introuvable";

    echo 'introuvable';
        break;
}




//boucle loops FOR
ECHO "les boucle <br><br><br>";
ECHO "1-le boucle  for  <br><br>";

$a=5;
for ($i=0; $i <= 10; $i++) { 
    echo"$a"."*"."$i=". $a*$i."<br>";

   
};

echo"<br><br>boucle while<br><br>";


//BOUCLE WHILE
$a=4;
while ($a <=7) {
    echo "je suis la boucle while<br>";
     $a++;
}
echo"<br><br>boucle do while<br><br>";



// BOUCLE do WHILE
$i=12;
do{
    echo"je suis la boucle do while <br>";
    $i++;
}while($i <= 13) ;
echo"<br><br>";


// // //BOUCLE foreach utiliser sauf dans le cas de tablea
// // il affiche tout le contenu d'un tableau;
echo"je suis la boucle foreach <br>";
 $age=[23=>"imane",34=>"lola",54=>"karine"];
foreach($age as $value){
echo" $value.<br>";
 };
 echo"<br><br>";



//LES FONCTIONS
//foction sans paramettre
echo" les foctions <br><br>";
echo"je suis les foctions sans paramettre<br>";
function my_function(){
    echo"hello my friends <br>";
}
my_function();
echo"je suis les foctions avec 1 paramettre<br>";
function my_function1($ab){
    echo"$ab<br>";
}

my_function1(25);
echo"je suis les foctions avec 2 paramettre<br>";
function my_function2($cd,$ef){
    echo ($cd+$ef);
}
my_function2(14,21);
echo" <br><br>";

echo"les opperation _foctions <br>";
function my_function3($cd,$ef,$gh){
    return ($cd*$ef/$gh);
}
$op=my_function3(5,100,4);
echo($op);
echo" <br><br>";

//VAR GLOBALE ET LOCAL
echo"VAR LOCAL<br>";

function my_function4(){
    $vr=14;
    ECHO $vr;
}
my_function4();
echo" <br><br>";
echo"VAR GLOBALE <br>";
$v=129;
function my_function5(){
   global $v;
    ECHO $v;
}
my_function5();
echo" <br><br>";

//array ET LES FONCTION QUI EXIST 
echo"array ET LES FONCTION QUI EXIST var_dump, count<br>";
echo" <br>var_dump<br>";
$array=["sarah","lucas",23];
var_dump($array);
echo" <br>count<br>";
echo count($array);
echo" <br>print_r<br>";
print_r($array);

echo" <br><br>";

//les foctions get POST
//creation d'un formulaire de connection sur index.html get
echo"les foctions get et POST<br>";
echo" <br>les foctions get<br>";
echo" <br><br>";

///COKIE

setcookie("name","sarah je suis une cookie",time()+60*60*48);

echo $_COOKIE["name"];
echo "<br><br>";
///////////////

echo" <br><br>";
echo "date du site";
echo date("y/m/d");
echo "<br><br>";
echo date("Y/M/D");

?>





