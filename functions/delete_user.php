<?php
include 'database.php';
session_start();
$user_id =  $_GET['user_id'];

$query = "DELETE FROM users WHERE id ='". $user_id."'";

$result = run_sql_query($query);

if ($result) {


    $_SESSION["status_message"] = "User deleted";

    header("location: /book-store/manage-accounts.php");

} else {

    $_SESSION["status_message"] = "Unexpected error";

    header("location: /book-store/manage-accounts.php");
}

