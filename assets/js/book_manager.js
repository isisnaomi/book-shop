//Displays books in index for users
function display_books(book_list, container, criteria, category){
  book_list = order_books(book_list, criteria);
  var book_shop = "";
  container.innerHTML = '';
  for (i = 0; i < book_list.length; i++) {
      if(category ==null || book_list[i].category.toLowerCase() == category){
      book_rating = parseInt(book_list[i].rating);
      book_stars= " ";
      for (stars = 0; stars < book_rating; stars++){
        book_stars = book_stars + "<span class='glyphicon glyphicon-star book--star' aria-hidden='true'></span>";
      }
      book_addcart = "<button type='button' id="+ book_list[i].id +" class='btn btn-danger' onclick='cart.addItem("+book_list[i].id+", { name: \""+ book_list[i].name +"\", price: \""+book_list[i].price+"\", author: \""+ book_list[i].author +"\", photo: \""+book_list[i].photo+"\" }); redrawCart()'><span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>Add to cart</button>";
      book_details = "<button class='btn-info' onclick='display_book_details("+book_list[i].id+")'>See details ...</button>";
      book_shop = "<div class='col-xs-3'><div class='book--shop'><h3> $"+book_list[i].price+"</h3><p>Free shipping</p>"+book_addcart+"</div></div>";
      book_cover = "<div class='col-sm-2 col-sm-offset-1'><img class='book--cover' src='../../../cover_images/"+book_list[i].photo+"'/></div>";
      book_info = "<div class='col-sm-6' ><h3>"+book_list[i].name+"</h3><h5>"+book_list[i].author+"</h5><h5 class='book--category'>"+book_list[i].category+"</h5>"+book_stars+"<p>"+book_list[i].description+"</p>"+book_details+"</div>";
      container.innerHTML = container.innerHTML+ "<div class='book--box'><div class='row'><div class='col-sm-12'>"+book_cover+book_info+book_shop+"</div></div>";
    }
  }
}
//Displays books in index for users
function display_books_admin(book_list, container, criteria){
  book_list = order_books(book_list, criteria);
  var book_shop = "";
  container.innerHTML = '';
  for (i = 0; i < book_list.length; i++) {
    book_rating = parseInt(book_list[i].rating);
    book_stars= " ";
    for (stars = 0; stars < book_rating; stars++){
      book_stars = book_stars + "<span class='glyphicon glyphicon-star book--star' aria-hidden='true'></span>";
    }
    book_options = "<div class='btn-group' role='group'><form action='form-edit-book.php' method='post'><button type='submit' name='selected-book' value='"+book_list[i].id+"'class='btn btn-default'>Edit</button></form><form action='functions/delete_book.php' onSubmit='return confirm_delete_book()' method='post'><button type='submit' name='selected-book' value='"+book_list[i].id+"'class='btn btn-default'>Delete</button></form></div>";
    book_details = "<button class='btn-info' onclick='display_book_details("+book_list[i].id+")'>See details ...</button>";
    book_shop = "<div class='col-xs-3'><div class='book--shop'><h3> $"+book_list[i].price+"</h3><p>Free shipping</p>"+book_options+"</div></div>";
    book_cover = "<div class='col-sm-2 col-sm-offset-1'><img class='book--cover' src='../../../cover_images/"+book_list[i].photo+"'/></div>";
    book_info = "<div class='col-sm-6' ><h3>"+book_list[i].name+"</h3><h5>"+book_list[i].author+"</h5><h5 class='book--category'>"+book_list[i].category+"</h5>"+book_stars+"<p>"+book_list[i].description+"</p> "+book_details+"</div>";
    container.innerHTML = container.innerHTML+ "<div class='book--box'><div class='row'><div class='col-sm-12'>"+book_cover+book_info+book_shop+"</div></div>";
  }
}
function display_book_edit_info(book_info){
  var id = document.getElementById("id");
  var name = document.getElementById("name");
  var author = document.getElementById("author");
  var editor = document.getElementById("editor");
  var category = document.getElementById("category");
  var rating = document.getElementById("rating");
  var description = document.getElementById("description");
  var price = document.getElementById("price");
  var photo = document.getElementById("photo-preview");
  id.value = book_info.id;
  name.value = book_info.name;
  author.value = book_info.author;
  editor.value = book_info.editor;
  category.value = book_info.category;
  rating.value = book_info.rating;
  description.value = book_info.description;
  price.value = book_info.price;
  photo.src = 'assets/img/'+ book_info.photo;
}
function display_book_info(book_info){
  var id = document.getElementById("id");
  var name = document.getElementById("name");
  var author = document.getElementById("author");
  var editor = document.getElementById("editor");
  var category = document.getElementById("category");
  var rating = document.getElementById("rating");
  var description = document.getElementById("description");
  var price = document.getElementById("price");
  var photo = document.getElementById("photo");
  id.innerHTML = book_info.id;
  name.innerHTML = book_info.name;
  author.innerHTML = book_info.author;
  editor.innerHTML= book_info.editor;
  category.innerHTML = book_info.category;
  rating.innerHTML= book_info.rating;
  description.innerHTML = book_info.description;
  price.innerHTML = book_info.price;
  photo.src = 'assets/img/'+ book_info.photo;
}
function display_book_details(id){
  var win = window.open ("detail-book.php?selected-book=" + id, "Details", "location=1, status=1, scrollbars=1, width=800, height=455")
}
function confirm_delete_book(){
  var confirmation = confirm("Are you sure you want to delete this book?");
  if (!confirmation) {
    return false;
  }
}
function confirm_cancel_action(){
  var confirmation = confirm("Are you sure you want to cancel this action? \n Changes will be lost");
  if (!confirmation) {
    return false;
  }
}

function order_books(book_list, criteria){
  var book_list = sort_list(book_list, criteria);
  return book_list;
}

function sort_list(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];

        if (typeof x == "string")
        {
            x = x.toLowerCase();
        }
        if (typeof y == "string")
        {
            y = y.toLowerCase();
        }

        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}
