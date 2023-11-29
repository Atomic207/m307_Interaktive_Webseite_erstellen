<?php
$nachname = $_POST['nachname'] ?? '';
$vorname = $_POST['vorname'] ?? '';
$email = $_POST['email'] ?? '';
$lehrgang = $_POST['lehrgang'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /*db verbinden*/
    $server = 'localhost';
    $dbname = 'praxisarbeit';
    $dbuser = 'root';
    $dbpass = '';

    $db = new PDO(
        "mysql:dbname=$dbname;host=$server",
        $dbuser,
        $dbpass
    );

    /*sql befehl vorbereiten*/
    $sql = "INSERT INTO `team-rollen` (`ID`, `Nachname`, `Vorname`, `email`, `Lehrgang`) VALUES (NULL, :nachname, :vorname, :email, :lehrgang)";
    $stmt = $db->prepare($sql);

    /*sql befehl ausführen*/
    $result = $stmt->execute([
        "nachname" => $nachname,
        "vorname" => $vorname,
        "email" => $email,
        "lehrgang" => $lehrgang
    ]);
    $m_id = $db->lastInsertId();
    /*resultat ausgeben*/
    if ($result) {
        header("Location: succsess.php?m-id=$m_id");
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: addnew.php");
}
