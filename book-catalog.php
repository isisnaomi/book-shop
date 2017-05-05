<!DOCTYPE html>
<html lang="en">
<?php
include 'functions/book_manager.php';
//Getting books from database
$book_catalog = list_books();
?>
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php';?>
<div class="container">
  <div class="catalog--options">
    <div class="row">
      <div class="column-grid-sm-2 column-grid-sm-offset-10">
        <a  class="btn btn-blue" href="form-add-book.php" >Add book</a>
      </div>
    </div>
  </div>
<div class="catalog" id="catalog--container">
  <!--book box -->
  <div class="book--box">
    <div class="row">
        <div class="column-grid-lg-12">
            <div class="column-grid-sm-2 column-grid-sm-offset-1">
              <img class="book--cover" src="assets/img/book--banner_cover.jpg" />
            </div>
            <div class="column-grid-sm-5" >
              <h3>The Light Between Oceans</h3>
              <h5>by M. l. Stedman</h5> <h5 class="book--category">Novel</h5>
              <span class="glyphicon glyphicon-star book--star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star book--star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star book--star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star book--star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star book--star" aria-hidden="true"></span>
              <p>
                After four harrowing years on the Western Front,
                Tom Sherbourne returns to Australia and takes a job
                as the lighthouse keeper on Janus Rock, nearly half
                a day's journey from the coast.
              </p>
              <a href="#">See details ...</a>
            </div>
            <div class="column-grid-xs-3 column-grid-sm-offset-1">
              <div class="book--shop">
                <h3>$14.99</h3>
                <p>
                  Free shipping
                </p>
                <div class="btn-group" role="group" aria-label="...">
                  <a href="form-edit-book.php" class="btn btn-simple">Edit</a>
                  <button type="button" class="btn btn-simple">Delete</button>
                </div>
              </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.book box -->
</div>
  <!-- /.catalog-->
</div>
<!-- /.container-->
</body>

<script src="assets/js/book_manager.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
      var book_catalog = <?php echo json_encode($book_catalog); ?>;
      var container = document.getElementById("catalog--container");

      // Displaying books providing array, container, and order criteria
      display_books_admin(book_catalog, container, "category");
    });
</script>

</html>
