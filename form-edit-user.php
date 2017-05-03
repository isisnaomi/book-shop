<?php include 'functions/check_privileges.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php';?>

<?php include 'functions/database.php'; ?>
<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Edit user</h2>
      </div>

      <?php

      $query = "SELECT * FROM users WHERE id ='" . $_GET['user_id']."'";
      $result = run_sql_query($query);
      $user = mysqli_fetch_array($result ,MYSQLI_ASSOC);
      ?>

      <div class="col-sm-8 col-sm-offset-2">
        <form name="create-user-form" action="functions/edit_user.php" onsubmit="return validate(this)" method="post">
          <input type="hidden" class="form-control" name="id" value="<?php echo $user['id'] ?>">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" readonly value="<?php echo $user['username'] ?>">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control"  name="password">
          </div>
          <div class="form-group">
            <input type="checkbox" name="change_password" value="true"> Change password? <br>
          </div>

          <div class="form-group">
            <label for="type">User privileges:</label>
            <select class="form-control" name="type">
              <?php
              if($user['type'] == 'admin')
                echo '<option>admin</option> <option>user</option>';
              else
                echo '<option>user</option> <option>admin</option>';
              ?>


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

    function validate(form){

      var username = document.forms["create-user-form"]["username"].value;
      var password = document.forms["create-user-form"]["password"].value;
      var change_password = document.forms["create-user-form"]["change_password"].checked;


      if (change_password && (password.length < 5 || hasWhiteSpace(password))) {
        alert("The password field must be at least 5 characters without spaces");
        return false;
      }
    }

    function hasWhiteSpace(s) {
      return s.indexOf(' ') >= 0;
    }
</script>
</html>
