<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "root";
$db_name = "agens";


$connection = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name") or die ("Could not connect to mysql");

?>