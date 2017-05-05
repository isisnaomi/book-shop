<?php
include 'functions/book_manager.php';

$selected_book = null;
if(isset($_GET['selected-book'])){

    $selected_book = $_GET['selected-book'];
    //Getting books from database
    $book_info = get_book($selected_book);
}
?>
<?php include 'partials/head.php';?>
<body>
<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="col-xs-12">
        <input style="display:none" type="text" class="form-control" id="id" name="id" readonly>

        <div class="book--box">
          <div class="row">
              <div class="col-lg-12">
                  <div class="col-sm-2 col-sm-offset-1">
                    <img class="book--cover" id='photo' src="assets/img/book--banner_cover.jpg" />
                  </div>
                  <div class="col-sm-5" >
                    <h3 id="name">The Light Between Oceans</h3>
                    <h5 id="author">by M. l. Stedman</h5><h5 id="category" class="book--category">Novel</h5>
                    <h6 id="editor"></h6>
                    <span id="rating"></span><span class="glyphicon glyphicon-star book--star" aria-hidden="true"></span>

                    <p id="description">
                      After four harrowing years on the Western Front,
                      Tom Sherbourne returns to Australia and takes a job
                      as the lighthouse keeper on Janus Rock, nearly half
                      a day's journey from the coast.
                    </p>
                  </div>
                  <div class="col-xs-3 col-sm-offset-1">
                    <div class="book--shop">
                      <h3 id="price">$14.99</h3>
                      <p>
                        Free shipping
                      </p>
                    </div>

                  </div>
              </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.book box -->
      </div>
      </div>

    </div>
  </div>

</div>
</body>
<script src="assets/js/book_manager.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
      var book_info =  <?php echo json_encode($book_info); ?>;
      display_book_info(book_info);
    });
</script>
