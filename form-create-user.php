<?php include 'functions/check_privileges.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php';?>
<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="column-grid-xs-12 text-center">
        <h2>Create new user</h2>
      </div>

      <div class="column-grid-sm-8 column-grid-sm-offset-2">
        <form name="create-user-form" action="functions/create_user.php" onsubmit="return validate(this)" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="name" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="author" name="password">
          </div>

          <div class="form-group">
            <label for="type">User privileges:</label>
            <select class="form-control" id="category" name="type">
              <option>admin</option>
              <option>user</option>
            </select>
          </div>

          <input type="submit" class="btn btn-simple" value="Save user">

        </form>
      </div>
    </div>
  </div>

</div>
</body>

<script type="text/javascript">

  function validate(form){

    var username = document.forms["create-user-form"]["username"].value;
    var password = document.forms["create-user-form"]["password"].value;

    if (username.length < 5 || hasWhiteSpace(username)) {
      alert("The username field must be at least 5 characters without spaces");
      return false;
    }
    if (password.length < 5 || hasWhiteSpace(password)) {
      alert("The password field must be at least 5 characters without spaces");
      return false;
    }

  }

  function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
  }
</script>
</html>
