
<?php
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
            <th>supprimer</th>

        </tr>
  
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            
            
            
           echo "</tr>";
            
        }
        ?>
    </table>
    
<?php
 }
 ?>