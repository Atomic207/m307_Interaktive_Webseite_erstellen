<?php
$nachname = $_POST['Nachname'] ?? '';
$vorname = $_POST['Vorname'] ?? '';
$email = $_POST['email'] ?? '';
$lehrbeginn = $_POST['Lehrbeginn'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /*db verbinden*/
    $server = 'localhost';
    $dbname = 'praxisarbeit';
    $dbuser = 'root';
    $dbpass = '';

    $db = new PDO(
        "mysql:dbname=$dbname;host=$server",
        $dbuser,
        $dbpass,
        [ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]
    );

    /*sql befehl vorbereiten*/
    $sql = "INSERT INTO `team-rollen` (`ID`, `Nachname`, `Vorname`, `email`, `Lehrbeginn`) 
    VALUES (NULL, :Nachname, :Vorname, :email, :Lehrbeginn)";
    $stmt = $db->prepare($sql);

    /*sql befehl ausführen*/
    $result = $stmt->execute([
        "Nachname" => $nachname,
        "Vorname" => $vorname,
        "email" => $email,
        "Lehrbeginn" => $lehrbeginn
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
