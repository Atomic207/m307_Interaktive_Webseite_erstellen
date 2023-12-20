<?php
$m_id = $_GET['m-id'];

    /*db verbinden*/
    $server ='localhost';
    $dbname = 'atheytaz_praxisarbeit';
    $dbuser = 'db-praxisarbeit-m307';
    $dbpass = 'praxisarbeit';

    $db = new PDO(
        "mysql:dbname=$dbname;host=$server",
        $dbuser,
        $dbpass
    );

$sql = "SELECT *  FROM `team-rollen` WHERE `id` = ?;";
$stmt = $db->prepare($sql);
$stmt->execute([$m_id]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$nachname = $row['Nachname'];
$vorname = $row ['Vorname'];
$email = $row ['email'];
$lehrbeginn = $row ['Lehrbeginn'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sucsess</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
 <div class="container">
    <h2>LP wurde erfolgreich hinzugefügt!</h2>
    <a href="addnew.php">
        <input type="submit" value="Einen weiteren LB hinzufügen" class="full-width green-border">
        </a>
        <a href="index.php">
            <input type="submit" value="Zurück zur Tabelle" class="full-width green-border">
            </a>
</body>
</html>