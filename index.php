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
</head>

<body>

  <div>
    <div class="card-body">
      <table class="tabel tabel-border">
        <tr>
          <td>User ID</td>
          <td>Vorname</td>
          <td>Nachname</td>
          <td>Email</td>
          <td>Lehrbeginn</td>
          <td>Edit</td>
          <td>Delet</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Nachname']; ?></td>
            <td><?php echo $row['Vorname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['Lehrbeginn']; ?></td>
            <td><a href="#"></a>Edit</td>
            <td><a href="#"></a>Delet</td>

          </tr>

        <?php
        }
        ?>
      </table>
    </div>
  </div>

    <h2>TEST</h2>
   
    <a href="addnew.php">
      <button class="full-width green-bg">Einen weiteren LB hinzufügen</button>

    </a>
  </body>

  </html>