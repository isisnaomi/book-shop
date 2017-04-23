<?php include 'functions/check_privileges.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'functions/book_manager.php';

$selected_book = null;
if(isset($_POST['selected-book'])){

    $selected_book = $_POST['selected-book'];
    //Getting books from database
    $book_info = get_book($selected_book);
}
?>


<?php include 'partials/head.php';?>
<body>
<?php include 'partials/navigation.php';?>
<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Edit book</h2>
      </div>

      <div class="col-sm-8 col-sm-offset-2">
        <form enctype="multipart/form-data" name="edit-form" action="functions/edit_book.php" method="post" onsubmit="return validate()">
          <div class="form-group">
            <input style="display:none" type="text" class="form-control" id="id" name="id" readonly>

            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" readonly>
          </div>
          <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author">
          </div>
          <div class="form-group">
            <label for="editorial">Editor:</label>
            <input type="text" class="form-control" id="editor" name="editor">
          </div>
          <div class="form-group">
            <label for="rating">Category:</label>
            <select class="form-control" id="category" name="category">
              <option>Science Fiction</option>
              <option>Drama</option>
              <option>Horror</option>
              <option>Romance</option>
              <option>Novel</option>
              <option>Mystery</option>
              <option>Health</option>
              <option>Travel</option>
              <option>History</option>
              <option>Math</option>
              <option>Comics</option>
              <option>Science</option>
              <option>Religion</option>
            </select>
          </div>
          <div class="form-group">
            <label for="rating">Rating:</label>
            <select class="form-control" id="rating" name="rating">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
          <label for="description">Description:</label>
          <textarea class="form-control" rows="5" id="description" name="description"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
            <label for="photo">Photo:</label>
            <img src="" id="photo-preview" class="book--cover"/>
            <input type="file" class="form-control" id="photo" name="photo">
          </div>

          <button type="submit" name="submit" value="edit" class="btn btn-default">Submit</button>
          <a href="book-catalog.php" onclick='return confirm_cancel_action();'>Cancel</a>
        </form>
      </div>
    </div>
  </div>

</div>
</body>
<script src="assets/js/book_manager.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
      var book_info =  <?php echo json_encode($book_info); ?>;
      display_book_edit_info(book_info);
    });
</script>
<script type="text/javascript">
    function validate(){
      var name = document.forms["edit-form"]["name"].value;
      var author = document.forms["edit-form"]["author"].value;
      var editor = document.forms["edit-form"]["editor"].value;
      var category = document.forms["edit-form"]["category"].value;
      var rating = document.forms["edit-form"]["rating"].value;
      var description = document.forms["edit-form"]["description"].value;
      var price = document.forms["edit-form"]["price"].value;
      var photo = document.forms["edit-form"]["photo"].value;
      if (name == "") {
        alert("Name must be filled out");
        return false;
      }
      if (author == "") {
        alert("Author must be filled out");
        return false;
      }
      if (editor == "") {
        alert("editor must be filled out");
        return false;
      }
      if (category == "") {
        alert("Category must be filled out");
        return false;
      }
      if (rating == "") {
        alert("Rating must be filled out");
        return false;
      }
      if (description == "") {
        alert("Description must be filled out");
        return false;
      }
      if (price == "") {
        alert("Price must be filled out");
        return false;
      }
    }
</script>
</html>
