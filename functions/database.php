<?php


function run_sql_query($query){
  $server = "davidh.heliohost.org";
  $user = "davidh_dev";
  $password = "programacionweb";
  $db = "davidh_bookstore";

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

