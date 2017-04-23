<?php
include 'database.php';

session_start();

$change_password = $_POST['change_password'];
$user_id = $_POST['id'];
$password =  $_POST['password'];
$type =  $_POST['type'];

if($change_password == 'true'){

    $query = "UPDATE users SET password='".$password."',".
            "type='".$type."' WHERE id='".$user_id."'";

} else{

    $query = "UPDATE users SET type='".$type."' WHERE id='".$user_id."'";

}

$result = run_sql_query($query);

if ($result) {

    $_SESSION["status_message"] = "User edited correctly";

    header("location: /book-store/manage-accounts.php");

} else {

    $_SESSION["status_message"] = "Unexpected error";

    header("location: /book-store/manage-accounts.php");
}

