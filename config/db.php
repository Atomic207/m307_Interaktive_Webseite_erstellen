<?php

$con = mysqli_connect("localhost", "root", "", "praxisarbeit");

if(!$con){
    die("Connection Error: " . mysqli_connect_error());
}

?>