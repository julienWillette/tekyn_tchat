<?php
$error = null;
if (!empty($_POST['username'])) {
    if($_POST['username'] === 'juju94') {
        session_start();
        $_SESSION['connecte'] =1;
        header('Location: /src/View/tchat.php');
    } else {
        $error = "username incorrect";
    }
}

require_once '../Controller/auth.php';
if (is_connected()) {
    header('Location: /src/View/tchat.php');
    exit();
}
$title = "Login";
require_once 'index.php';
?>

<?php if ($error): ?>
<div><?= $error ?></div>
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