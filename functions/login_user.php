<?php
include 'database.php';
session_start();

if ($_POST["username"] == '') {

    $_SESSION["status_message"] = "The username field is empty";
    header("location: /book-store/index.php");
    return;
}
if ($_POST["password"] == '') {

    $_SESSION["status_message"] = "The password field is empty";
    header("location: /book-store/index.php");
    return;
}



$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE username ='" . $username . "' AND password ='" . $password . "'";

$result = run_sql_query($query);

if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_array($result ,MYSQLI_ASSOC);

    $_SESSION["actual_username"] = $user['username'];
    $_SESSION["user_type"] = $user['type'];
    $_SESSION["status_message"] = "Login successful";

    header("location: /book-store/index.php");

} else {

    $_SESSION["status_message"] = "The username is not valid";

    header("location: /book-store/index.php");
}

