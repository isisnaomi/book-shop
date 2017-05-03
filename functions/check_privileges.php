<?php

session_start();
$privileges = $_SESSION["user_type"];
session_abort();

if($privileges != 'admin'){
    $_SESSION["status_message"] = "You don´t have privileges to access";
    header("location: /book-store/index.php");
    return;
}

