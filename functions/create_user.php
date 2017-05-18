<?php
include 'database.php';

session_start();
$username =  $_POST['username'];
$password =  $_POST['password'];
$type =  $_POST['type'];

$query = $sentenciaSQL = "INSERT INTO users (username, password, type) ".
    "VALUES ('" . $username . "', '" . $password . "', '" . $type . "')";

$result = run_sql_query($query);

if ($result) {

    $_SESSION["status_message"] = "User created correctly";

    header("location: /~equipo2/manage-accounts.php");

} else {

    $_SESSION["status_message"] = "Unexpected error";

    header("location: /~equipo2/manage-accounts.php");
}

