<?php

require("connexion.php");

// $id = $_GET['id'];
// $nom = "";
// $email = "";
// $message = "";

// $sql = "select * from message where id='" . $id . "'";
// $result = $conn->query($sql);
// while ($row = $result->fetch_assoc()) {
//     $nom = $row["nom"];
//     $email = $row["email"];
//     $message= $row["message"];
// }
// ?>

// <h3 align="center">Formulaire de mise à jour d'un message</h3>

// <div style="margin: 20px;" name="postMessage">
//     <form action="miseajour.php" method="post">
//         <input type="hidden" id="id" value="<?php echo $id; ?>"/>
//         <div class="form-group">
//             <label for="nom">Nom</label>
//             <input type="text" id="nom" value="<?php echo $nom; ?>" 
//             class="form-control" id="nom" placeholder="Enter nom">
//         </div>

//         <div class="form-group">
//             <label for="email">Email</label>
//             <input type="email" id="email" value="<?php echo $email; ?>"
//              class="form-control" id="email" placeholder="Enter email">
//         </div>

//         <div class="form-group">
//             <label for="message">Message</label>
//             <textarea id="message" class="form-control" id="message"
//              placeholder="taper votre message"><?php echo $message; ?></textarea>
//         </div>
//         <input type="submit" onclick="" class="btn btn-primary" value="Update">
//     </form>
//     <div>
//     <?php


// $id = $_GET['id'];
// $nom = $_GET['nom'];
// $email = $_GET['email'];
// $contenu = htmlspecialchars($_GET['message'], ENT_QUOTES); 


// $sql = "update message set nom='".$nom."', email='".$email."', message='".$message."' where id='".$id."'";

// if ($conn->query($sql) === TRUE) {
   
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// ?>