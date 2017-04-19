
<!-- Navigation -->
<nav class="navbar  navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-search">


          <form action="/book-store/search-result.php" method="get">
            <div class="input-group">
              <input type="text" class="form   -control" name="search-input" placeholder=" Search book...">

            </div><!-- /input-group -->
          </form>



      </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header text-center">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><strong>book</strong>shop</a>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="book-catalog.php">Manager</a>
                </li>
                <li>
                    <a href="#">Shopping Cart</a>
                </li>
                <li>
                    <?php

                    session_start();

                    if(isset($_SESSION['actual_username'])){
                        echo '<a onclick="document.getElementById(\'login-modal\').style.display=\'block\'"'.
                                'style="width:auto; cursor: pointer">Logout</a>';
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

<?php include 'partials/login.php';?>
