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

      <div id='cart-visibility-handler'>
        <div id='cart' class=''>
          <div id='close-cart'></div>
          <div id='cart-content'></div>
          <div class='cart-totals'>
            <div class='the-cart-total'>Total: <span id='total-ammount'>0.00</span></div>
            <div><button onclick='wasteclientsmoney()' class='the-pay-button'>PAGAR</button></div>
          </div>
        </div>
      </div>
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

<script src="assets/js/cookies-charola.js"></script>
<script src="assets/js/Cart.js"></script>
<script>let cart = new Cart()</script>

<script>
  function countAmmount() {
    let index = cart.index()
    let count = 0
    for ( id in index ) {
      count += index[id].ammount
    }
    return count
  }
</script>

<script>
  /* Trash code para mostrar la wea */
  var showCart = function () {
    var clazz = this.getAttribute('class')

    if ( clazz === '' || clazz === undefined ) {
      console.log( 'show' )
      this.setAttribute( 'class', 'visible' )
      this.removeEventListener('click', showCart)
    }
  }

  var hideCart =  function () {
    var clazz = document.getElementById('cart').getAttribute('class')

    if ( clazz === 'visible' ) {
      document.getElementById('cart').setAttribute( 'class', '' )
      setTimeout(function() {
        document.getElementById('cart').addEventListener('click', showCart)
      }, 800)
      console.log( 'close' )
    }
  }

  document.getElementById('cart').addEventListener('click', showCart)
  document.getElementById('close-cart').addEventListener('click', hideCart)
</script>

<script>
  function setIncreaseDecreaseListeners () {
    /* Trash code para aumentar cantidades */
    var increaseButtons = document.querySelectorAll('.increase-item-ammount');

    [].forEach.call(increaseButtons, function(thiz) {
      thiz.addEventListener('click', function () {
        cart.increaseItemAmmount(this.dataset.id)
        redrawCart()
      })
    })

    var decreaseButtons = document.querySelectorAll('.decrease-item-ammount');

    [].forEach.call(decreaseButtons, function(thiz) {
      thiz.addEventListener('click', function () {
        cart.decreaseItemAmmount(this.dataset.id)
        redrawCart()
      })
    })
  }
</script>

<script>
  function setTotal () {
    var items = cart.index()
    var total = 0

    for ( id in items ) {
      let item = items[id]

      total += (item.ammount * parseFloat(item.price))
    }

    document.getElementById('total-ammount').innerHTML = total.toFixed(2)
  }
</script>

<script>
  function redrawCart () {

    if ( countAmmount() < 1 ) {
      document.getElementById('cart-visibility-handler')
        .setAttribute('class','hidden')
      document.getElementById('cart')
        .setAttribute('class','')
      return
    } else {
      document.getElementById('cart-visibility-handler')
        .setAttribute('class','')
      document.getElementById('cart')
        .addEventListener('click', showCart)
    }

    var index = cart.index()
    var content = ''

    for ( id in index ) {
      let item = index[id]

      if ( item.ammount < 1 ) continue;

      let template = `
      <div id='cart-item-`+id+`' class='cart-item'>
        <div class='cart-item-container'>
          <img src='assets/img/`+item.photo+`'>
          <div class='cart-item-attributes-container'>
            <span class='cart-item-attribute name'>`+item.name+`</span>
            <span class='cart-item-attribute author'>`+item.author+`</span>
            <span class='cart-item-attribute price'>$ `+item.price+` U.S.</span>
            <span class='cart-item-attribute ammount'>
              `+item.ammount+`
              <button class='increase-item-ammount' data-id='`+id+`'>+</button>
              <button class='decrease-item-ammount' data-id='`+id+`'>-</button>
            </span>
          </div>
        </div>
      </div>
      `

      content += template
    }

    document.getElementById('cart-content').innerHTML = content
    setIncreaseDecreaseListeners()
    setTotal()
  }

  redrawCart()
</script>

<script>
  function wasteclientsmoney () {
    if ( countAmmount() < 1 ) {
      alert('Nada que pagar')
      return
    }
    var really = confirm("¿Desperdiciar dinero en papel?")

    if ( really ) {
      unsetCookie( "cart" )
      alert( "Gracias por comprar en Libros Pronto SA de CV" )
      redrawCart()
    }
  }
</script>

</html>
