<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php';?>
<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Create new user</h2>
      </div>

      <div class="col-sm-8 col-sm-offset-2">
        <form name="create-user-form" action="functions/create_user.php" onsubmit="return validate()" method="post">
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="author">Password:</label>
            <input type="password" class="form-control" id="author" name="author">
          </div>

          <div class="form-group">
            <label for="rating">User privileges:</label>
            <select class="form-control" id="category" name="category">
              <option>admin</option>
              <option>user</option>
            </select>
          </div>

          <input type="submit" class="btn btn-default" value="Save user">

        </form>
      </div>
    </div>
  </div>

</div>
</body>

<script type="text/javascript">

    function validate(){

      var username = document.forms["create-user-form"]["username"].value;
      var password = document.forms["create-user-form"]["password"].value;
      debugger;
      if (username.length < 5) {
        alert("The username field must be at least 5 characters");
        return false;
      }
      if (password.length < 5) {
        alert("The password field must be at least 5 characters");
        return false;
      }

    }
</script>
</html>
