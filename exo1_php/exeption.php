<?php
$note=22;
if($note>20 or $note<0){
    echo "note invalide";
}else{
    echo "votre note est: ".$note; 
}

//////////////////////////$!x=$x==0
try{
    if($note>20 or $note<0){
throw new Exception("  note invalide ");
} echo "votre note est :".$note;
}catch(Exception $e){
    echo ' erreur ' .$e->getMessage();

};





?>