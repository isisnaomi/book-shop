<?php include 'functions/check_privileges.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php'; ?>


<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="column-grid-xs-12 text-center">
        <h2>Mannage accounts</h2>
      </div>

      <div class="column-grid-sm-8 column-grid-sm-offset-2">
        <a class="btn btn-simple column-grid-xs-3 column-grid-xs-offset-9"
           style="background-color: #5ed96e" href="form-create-user.php">Create new account</a>
        <table class="table users-table" style="margin-bottom: 10px">

          <thead>
            <th>User</th>
            <th>Type</th>
            <th>Options</th>
          </thead>

          <?php
          include("functions/database.php");
          $actual_user = $_SESSION['actual_username'];
          $button = '';

          $query = "SELECT username, type, id FROM users";
          $users = run_sql_query($query);
          foreach ($users as $user) {
            $id = $user['id'];
            if($actual_user != $user['username'])
              $button = '<a name="'.$id.'" onclick="confirmDelete(this)" class="btn btn-red">Delete user</a></td>';
            else
              $button = '';

            echo '<tr>'.
                '<td style="display: none">'.$user['id'].'</th>'.
                '<td>'.$user['username'].'</th>'.
                '<td>'.$user['type'].'</th>'.
                '<td><a href="form-edit-user.php?user_id='.$id.'" class="btn btn-yellow ">Edit user</a>'.
                $button.
                '</tr>';
          }

          ?>



        </table>
      </div>
    </div>
  </div>

</div>
</body>

<script>

  function confirmDelete(button){
    userId = button.name;
    var selection = confirm('Are you sure to delete this user permanently?')
    if (selection == true) {
      window.location.href = "functions/delete_user.php?user_id="+userId;
    } else {

    }
  }

  </script>

