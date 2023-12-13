<?php
/*require_once('config/db.php'); // Semikolon hinzugefügt
$query = "SELECT * FROM `team-rollen`"; // Anführungszeichen um den Tabellennamen entfernt
$result = mysqli_query($con, $query);*/


require_once 'config/db.php';
require_once 'config/functions.php';

$result = display_data();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Der Rest des HTML-Headers bleibt unverändert -->
  <link rel="stylesheet" href="/style/style.css">
</head>

<body>

<div>
    <div class="card-body">
      <table class="table table-border"> <!-- Tippfehler in "tabel" korrigiert -->
        <tr>
          <td>User ID</td>
          <td>Vorname</td>
          <td>Nachname</td>
          <td>Email</td>
          <td>Lehrbeginn</td>
          <td>Edit</td>
          <td>Delete</td> <!-- "Delet" korrigiert -->
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Vorname']; ?></td> <!-- Vor- und Nachnamen vertauscht -->
            <td><?php echo $row['Nachname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['Lehrbeginn']; ?></td>
            <td><a href="<?= "edit.php?id=" . $row['ID'] ?>">Edit</a></td> <!-- Edit-Link korrigiert -->
            <td><a href="<?= "delet.php?id=" . $row['ID'] ?>">Delet</a></td> <!-- Delete-Link korrigiert -->
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>

  
   
    <a href="addnew.php">
      <button class="full-width green-bg">Einen weiteren LB hinzufügen</button>

    </a>
  </body>

  </html>