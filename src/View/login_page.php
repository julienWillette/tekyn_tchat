<?php
$title = "Page login";
require 'index.php';
?>

<div class="div-login">
    <h2>Enter your username</h2>
    <form>
        <span action="login_page.php" method="GET">
            <input type="text" name="username" placeholder="Username" autocomplete="off">
        </span>
        <span>
            <a href="#">Créer un compte</a>
        </span>
        <span>
            <input type="submit" value="Validé">
        </span>
    </form>
</div>