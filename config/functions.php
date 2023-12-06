<?php

require_once 'db.php';

function display_data(){
    global $con;
    $query = "SELECT * FROM `team-rollen`"; // Verwendung von Backticks für Tabellennamen
    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Fehler in der Abfrage: " . mysqli_error($con));
    }

    return $result;
}

?>
