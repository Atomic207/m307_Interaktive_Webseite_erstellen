<?php


$sql = "INSERT INTO `team-rollen` (`ID`, `Nachname`, `Vorname`, `Lehrbeginn`)
 VALUES (NULL, ?, ?, ?);";
$stmt = $db -> prepare($sql);
$result = $stmt -> execute([ ]);

