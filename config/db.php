<?php

$con = mysqli_connect("localhost", "db-praxisarbeit-m307", "praxisarbeit", "atheytaz_praxisarbeit");

if(!$con){
    die("Connection Error: " . mysqli_connect_error());
}

?>