<?php
include 'database.php';

if ($_POST["username"] == '') {
    echo "El campo de usuario esta vacio";
}
if ($_POST["password"] == '') {
    echo "El campo de contraseña esta vacio";
}


$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT username, password FROM users WHERE username ='" . $username . "' AND password ='" . $password . "'";

$result = run_sql_query($query);

if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_array($result ,MYSQLI_ASSOC);

    session_start();
    $_SESSION["actual_username"] = $user['username'];

    header("location: /book-store/index.php");

} else {

    //Sino redirigir a la página index.html

    echo "no existe el usuario";
}

