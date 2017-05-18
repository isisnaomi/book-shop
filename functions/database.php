<?php


function run_sql_query($query){
  $server = "localhost";
  $user = "equipo2";
  $password = "equipo2";
  $db = "equipo2_bookshop";

  $connection = mysqli_connect($server, $user, $password, $db);

  //Verifying connection
  if (!$connection) {
      die("Could not connect: " . mysqli_connect_error());
  }

  $result = mysqli_query($connection, $query);

  if(mysqli_insert_id($connection)){
    $result = mysqli_insert_id($connection);
  }

  mysqli_close($connection);

  return $result;

}
