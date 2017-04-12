<?php
include 'database.php';

function list_books(){
  $books = [];

  $query = "SELECT * FROM books ORDER BY name";

  $result = run_sql_query($query);

  if (mysqli_num_rows($result) > 0) {
      while($row = $result->fetch_assoc()) {
          $books[] = $row;
      }
  }
  return $books;

}
function search_books( $parameter ){
  $books = [];

  $query = "SELECT * FROM books WHERE name LIKE '%$parameter%' ORDER BY name";

  $result = run_sql_query($query);

  if (mysqli_num_rows($result) > 0) {
      while($row = $result->fetch_assoc()) {
          $books[] = $row;
      }
      return $books;

  } else{

    $query = "SELECT * FROM books WHERE author LIKE '%$parameter%' ORDER BY name";

    $result = run_sql_query($query);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
      return $books;
  }


}
function get_book($id){
  $book = [];

  $query = "SELECT * FROM books where id = '$id'";

  $result = run_sql_query($query);

  if (mysqli_num_rows($result) > 0) {
      while($row = $result->fetch_assoc()) {
          $book[] = $row;
      }
  }
  return $book[0];
}

 ?>
