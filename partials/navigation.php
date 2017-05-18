
<?php

session_start();
$_SESSION['user_type'] = '';
$_SESSION['actual_username'] = '';

?>

<!-- Navigation -->
<nav class="navbar  navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-search">


          <form action="../search-result.php" method="get">
            <div class="input-group">
              <input type="text" class="form   -control" name="search-input" placeholder=" Search book...">

            </div><!-- /input-group -->
          </form>



      </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header text-center">
            
            <a class="navbar-brand" href="index.php"><strong>book</strong>shop</a>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="padding-top: 20px">

                <li>
                    <a href="index.php">Books</a>
                </li>
                    <?php
                    if($_SESSION['user_type'] == 'admin') {
                        echo ' <li><a href="book-catalog.php">Manager</a></li>';
                    }
                    ?>
                <li>
                    <a href="suggestions.php">Contact</a>
                </li>
                    <?php
                    if($_SESSION['user_type'] == 'admin') {
                        echo ' <li><a href="manage-accounts.php">Manage accounts</a></li>';
                    }
                    ?>
                <li>
                    <?php

                    if($_SESSION['actual_username'] != ''){
                        echo '<a href="functions/logout_user.php">Logout</a>';

                    }else{
                        echo '<a onclick="document.getElementById(\'login-modal\').style.display=\'block\'"'.
                            'style="width:auto; cursor: pointer">Login</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<?php
include 'partials/login.php';

if(isset($_SESSION['status_message']) && $_SESSION['status_message'] != ''){
    include 'partials/info-modal.php';
}
?>
