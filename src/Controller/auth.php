<?php

function is_connected (): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function user_connect () : void
{
    if (!is_connected()) {
        header('Location: /src/View/login.php');
        exit();
    }
}