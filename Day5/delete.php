<?php

require("connexion.php");

$id = $_GET['id'];
$sql = "delete from message where id='".$id."'";
if ($conn->query($sql) === TRUE) {
    require("data.php");
}
?>