<?php

require("connexion.php");

$id = $_GET['id'];

$nom = "";
$email = "";
$contenu = "";

$sql = "select * from message where id='" . $id . "'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $nom = $row["nom"];
    $email = $row["email"];
    $contenu = $row["contenu"];
}
?>

<h3 align="center">Formulaire de mise à jour d'un message</h3>

<div style="margin: 20px;" name="postMessage">
    <form action="miseajour.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="<?php echo $nom; ?>" class="form-control" id="nom" placeholder="Enter nom">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="contenu">Message</label>
            <textarea name="message" class="form-control" id="contenu" placeholder="taper votre message"><?php echo $contenu; ?></textarea>
        </div>
        <input type="submit" onclick="" class="btn btn-primary" value="Update">
    </form>
    <div>
