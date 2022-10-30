
<?php
Class Ville{
    public $nom;
    public $depart;
    
    function __construct($x,$y){
        $this->nom = $x;
        $this->depart = $y;
}
    public function getInfo(){
        $text="La ville de: $this->nom est dans
        le departement de: $this->depart<br>";
        return $text;
        
        }
    }
$ville1= new Ville('ivry-sur_seine','CRETEIL');
//$ville2= new Ville("bbbb","aaaaaaaaaa");
echo $ville1->getInfo();
///les variable globales
//var_dump($GLOBALS);

?>