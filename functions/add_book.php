<?php
include 'database.php';

if(isset($_POST["name"]) && isset($_POST["editor"]) && isset($_POST["category"]) && isset($_POST["author"])
&& isset($_POST["price"]) && isset($_POST["description"]) && isset($_POST["rating"]) && isset($_FILES["photo"])){

  $query = "INSERT INTO books (name, author, editor, category, rating, description , price)
  VALUES('" . $_POST["name"] ."',
  '" . $_POST["author"] ."',
  '" . $_POST["editor"] ."',
  '" . $_POST["category"] ."',
  '" . $_POST["rating"] ."',
  '" . $_POST["description"] ."',
  '" . $_POST["price"] ."')";

  $result = run_sql_query($query);


  $info = pathinfo($_FILES['photo']['name']);
  $ext = $info['extension']; // get the extension of the file
  $image_file_name = $result.".".$ext;

  $target = '../assets/img/'.$image_file_name;
  move_uploaded_file( $_FILES['photo']['tmp_name'], $target);

  $query = "UPDATE books
  SET photo = '" . $image_file_name ."'
   WHERE id = '".$result."' ";

  run_sql_query($query);

  header("location: /book-store/book-catalog.php");

} else {
  header("location: /book-store/form-add-book.php");
}
