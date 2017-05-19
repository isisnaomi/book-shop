<?php

session_start();
$_SESSION["status_message"] = "Suggestion send";

header("location: /~equipo2/index.php");
