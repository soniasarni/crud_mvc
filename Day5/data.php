<?php
// partie 1 : connexion à la base de données

require("connexion.php");



//partie 2 : récupération des data depuis la base de données

$sql = "SELECT id, nom, email, contenu FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <table border="1" align="center" class="table">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Contenu message</th>
            <th>Supprimer</th>
            <th>Mise jour</th>

        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["contenu"] . "</td>";?>
            <td><button onclick="deleteData(<?php echo $row['id'];?>)" class="btn btn-danger">Supprimer</button></td>
            <td><button onclick="updateData(<?php echo $row['id'];?>)" class="btn btn-warning">Modifier</button></td>
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