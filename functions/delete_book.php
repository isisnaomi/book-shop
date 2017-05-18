<?php
include 'database.php';

if(isset($_POST["selected-book"])){

  $query = "DELETE FROM books WHERE id ='" . $_POST["selected-book"] ."'";

  run_sql_query($query);
  header("location: /~equipo2/book-catalog.php");

} else {
  header("location: /~equipo2/book-catalog.php");
}
