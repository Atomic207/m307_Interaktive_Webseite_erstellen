<php require_once('config/db.php') $query="select * from 'team-rollen'" ; $result=mysqli_query($con,$query); ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übersicht</title>
    <link rel="stylesheet" href="/style/style.css">
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
          </tr>
          <tr>
          <?php

          while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['Nachname']; ?></td>
          <td><?php echo $row['Vorname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['Lehrbeginn']; ?></td>




            </tr>

          <?php
          }

          ?>
        </table>
      </div>
    </div>

    <h2>TEST</h2>
    <table class="tg">
      <tr>
        <th class="sized"></th>
        <th class="sized"></th>
        <th class="sized"></th>
        <th class="sized"></th>
      </tr>
      <tr>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
      </tr>
      <tr>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
      </tr>
      <tr>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
      </tr>
      <tr>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
      </tr>
      <tr>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
        <td class="sized"></td>
      </tr>
    </table>
    <a href="addnew.php">
      <button class="full-width green-bg">Einen weiteren LB hinzufügen</button>

    </a>
  </body>

  </html>