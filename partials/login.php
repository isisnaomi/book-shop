
<div id="login-modal" class="login-page modal">
    <div class="modal-form">
        <span onclick="document.getElementById('login-modal').style.display='none'"
              class="modal-close" title="Close Modal">&times;</span>
        <h1 class="modal-text-header">Log in</h1>
        <form class="modal-login-form" action="/~equipo2/functions/login_user.php" method="post">
            <input name="username" type="text" placeholder="username"/>
            <input name="password" type="password" placeholder="password"/>
            <input class="btn-submit" type="submit" value="login">
        </form>
    </div>
</div>

