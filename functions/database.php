<?php


function run_sql_query($query){
  $server = "localhost";
  $user = "root";
  $password = "root";
  $db = "bookshop";

  $connection = mysqli_connect("localhost", "root", "root", $db);

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

 ?>
