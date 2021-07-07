<?php
$title = "Page login";
require 'index.php';
?>

<div class="div-login">
    <h2>Enter your username</h2>
    <form>
        <span action="login_page.php" method="GET">
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