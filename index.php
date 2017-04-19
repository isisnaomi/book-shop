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


    <!-- Page Content -->
    <div class="container-fluid">
      <div class="catalog--jumbotron jumbotron">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-2">
            <img class="catalog--jumbotron_book" src="assets/img/book--jumbotron_cover.jpg" />
          </div>
          <div class="col-sm-4 col-sm-offset-0">
            <h3>The Light Between Oceans</h3>
            <h5>by M. l. Stedman</h5>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <p>
              After four harrowing years on the Western Front,
              Tom Sherbourne returns to Australia and takes a job
              as the lighthouse keeper on Janus Rock, nearly half
              a day's journey from the coast.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container fluid -->
    <div class="container">
      <div class="catalog--options">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <div class="btn-group btn-group-xs" role="group" aria-label="...">
              <button type="button" class="btn btn-default" value="science fiction">Science Fiction</button>
              <button type="button" class="btn btn-default" value="drama">Drama</button>
              <button type="button" class="btn btn-default" value="horror">Horror</button>
              <button type="button" class="btn btn-default" value="romance">Romance</button>
              <button type="button" class="btn btn-default" value="novel">Novel</button>
              <button type="button" class="btn btn-default" value="mystery">Mystery</button>
              <button type="button" class="btn btn-default" value="health">Health</button>
              <button type="button" class="btn btn-default" value="travel">Travel</button>
              <button type="button" class="btn btn-default" value="history">History</button>
              <button type="button" class="btn btn-default" value="math">Math</button>
              <button type="button" class="btn btn-default" value="science">Science</button>
              <button type="button" class="btn btn-default" value="comics">Comics</button>
              <button type="button" class="btn btn-default" value="religion">Religion</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container" id="catalog--container">



        <div class="book--box">
          <div class="row">
              <div class="col-lg-12">
                  <div class="col-sm-2 col-sm-offset-1">
                    <img class="book--cover" src="assets/img/book--jumbotron_cover.jpg" />
                  </div>
                  <div class="col-sm-5" >
                    <h3>The Light Between Oceans</h3>
                    <h5>by M. l. Stedman</h5><h5 class="book--category">Novel</h5>
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
                  <div class="col-xs-3 col-sm-offset-1">
                    <div class="book--shop">
                      <h3>$14.99</h3>
                      <p>
                        Free shipping
                      </p>
                      <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        Add to cart
                      </button>
                    </div>

                  </div>
              </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.book box -->
      </div>
      <!-- /.container-->
</body>

<script src="assets/js/book_manager.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
      var book_catalog = <?php echo json_encode($book_catalog); ?>;
      var container = document.getElementById("catalog--container");

      // Displaying books providing array, container, and order criteria AND CATEGORY FILTER
      display_books(book_catalog, container, "category", null);

      var num = null;
      var ele = document.querySelectorAll(".btn-group > button.btn");
      for(var i=0; i<ele.length; i++){
          ele[i].addEventListener("click", function(){
              value = this.value;
              display_books(book_catalog, container, "category", value);
          });
      }
    });
</script>

</html>
