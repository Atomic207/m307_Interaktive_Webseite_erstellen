<?php
$nachname = $_POST['nachname'] ??'';
$vorname = $_POST['vorname'] ??'';
$email = $_POST['email'] ??'';
$lehrgang = $_POST['lehrgang'] ??'';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    /*db verbinden*/
    $server ='localhost';
    $dbname = 'praxisarbeit';
    $dbuser = 'root';
    $dbpass = '';

    $db = new PDO(
        "mysql:dbname=$dbname;host=$server",
        $dbuser,
        $dbpass
    );

    /*sql befehl vorbereiten*/
    $sql = "INSERT INTO `team-rollen` (`ID`, `Nachname`, `Vorname`, `email`, `Lehrbeginn`) VALUES (NULL, ':nachname', ':vorname', ':email', ':lehrgang')";
    $stmt = $db -> prepare($sql);

    /*sql befehl ausführen*/
    $result = $stmt -> execute([
        "nachname" => $vorname,
        "vorname" => $nachname,
        "email" => $email,
        "lehrgang" => $lehrgang
    ]);
    $kommentar_id = $db-> lastInsertId();
    /*resultat ausgeben*/
    if($result){
        header("Location: succsess.php?kommentar-id=$kommentar_id");
    }
        
    else{
        header("Location: index.php");
    }
}
else{
    header("Location: addnew.php");
}
?>

