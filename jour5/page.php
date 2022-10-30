<?php

include("connexion.php");



//partie 2 : récupération des data depuis la base de données

 $sql = "SELECT id, nom, email, message FROM message";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Contenu message</th>
        </tr>
  
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            //echo "</tr>";
            ?>
            <td><button onclick="deleteData(<?php echo $row['id'];?>)" class="btn btn-danger">Supprimer</button></td>
            <td><button  class="btn btn-warning"onclick="updateData(<?php echo $row['id'];?>)" >Modifier</button></td>
           <?php echo "</tr>";
        }
        ?>
    </table>
<?php
 } else {
   echo "0 results";
 }
$conn->close();



?>
