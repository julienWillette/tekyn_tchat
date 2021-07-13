<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR  . 'Controller' . DIRECTORY_SEPARATOR . 'auth.php';
user_connect ();
$error = login();
$title = "Login";
require_once 'index.php';
?>

<?php if ($error): ?>
    <div class="username_error"><?= $error ?></div>
<?php endif; ?>

<div class="div-login">
    <h2>Enter your username</h2>
    <form action="" method="POST">
        <span action="login_page.php" method="POST">
            <input type="text" name="username" placeholder="Username" autocomplete="off" class="username">
        </span>
        <span>
            <a href="#" class="create-account">Créer un compte</a>
        </span>
        <span>
            <input type="submit" value="Validé" class="btn-login">
        </span>
    </form>
</div>