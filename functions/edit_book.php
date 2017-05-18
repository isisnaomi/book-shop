<?php
include 'database.php';

if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["category"]) && isset($_POST["editor"]) && isset($_POST["author"])
&& isset($_POST["price"]) && isset($_POST["description"]) && isset($_POST["rating"])){

  $query = "UPDATE books
  SET name = '" . $_POST["name"] ."',
  author = '" . $_POST["author"] ."',
  editor = '" . $_POST["editor"] ."',
  category = '" . $_POST["category"] ."',
  rating = '" . $_POST["rating"] ."',
  description = '" . $_POST["description"] ."',
  price = '" . $_POST["price"] ."'
  WHERE id = '".$_POST["id"]."' ";

  run_sql_query($query);

  if(isset($_FILES["photo"])){
    $id = $_POST["id"];
    $info = pathinfo($_FILES['photo']['name']);
    $ext = $info['extension']; // get the extension of the file
    $image_file_name = md5($id).".jpg";

    $target = '../~equipo2/cover_images/'.$image_file_name;
    move_uploaded_file( $_FILES['photo']['tmp_name'], $target);

    $query = "UPDATE books
    SET photo = '" . $image_file_name ."'
     WHERE id = '".$id."' ";

    run_sql_query($query);
  }



  header("location: /~equipo2/book-catalog.php");

} else {

  header("location: /~equipo2/book-catalog.php");
}
