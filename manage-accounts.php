<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php';?>

<body>
<?php include 'partials/navigation.php'; ?>
<div class="container">
  <div class="form--box">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Mannage accounts</h2>
      </div>

      <div class="col-sm-8 col-sm-offset-2">
        <a class="btn btn-default col-xs-3 col-xs-offset-9" href="form-create-user.php">Create new account</a>
        <table class="table users-table" style="margin-bottom: 10px">

          <thead>
            <th>User</th>
            <th>Type</th>
            <th>Options</th>
          </thead>

          <?php
          include("functions/database.php");
          $query = "SELECT username, type, id FROM users";
          $users = run_sql_query($query);
          foreach ($users as $user) {
            $id = $user['id'];
            echo '<tr>'.
                '<td style="display: none">'.$user['id'].'</th>'.
                '<td>'.$user['username'].'</th>'.
                '<td>'.$user['type'].'</th>'.
                '<td><a href="edit-user.php?'.$id.'" class="btn btn-xs btn-warning">Edit user</a>'.
                '<a name="'.$id.'" onclick="confirmDelete(this)" class="btn btn-xs btn-danger">Delete user</a></td>'.
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

