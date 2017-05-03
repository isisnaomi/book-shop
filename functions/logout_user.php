<?php

session_start();

$_SESSION["actual_username"] ='';
$_SESSION["user_type"] = '';

header("location: /book-store/index.php");


