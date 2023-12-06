<php require_once('config/db.php') $query="select * from 'team-rollen'" ; $result=mysqli_query($con,$query); ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übersicht</title>
    <link rel="stylesheet" href="/style/style.css"> 
     <!-- Stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  </html>