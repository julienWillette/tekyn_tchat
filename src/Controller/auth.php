<?php

$users = [
    [
        'id' => 1,
        'username' => 'Florence',
        'firstname' => 'Florence',
        'lastname' => 'Hale',
        'picture' => 'Florence_Hale.jpg',
        'is_connected' => true
    ],
    [
        'id' => 2,
        'username' => 'Eva',
        'firstname' => 'Eva',
        'lastname' => 'Bryant',
        'picture' => 'Eva_Bryant.jpg',
        'is_connected' => false
    ],
    [
        'id' => 3,
        'username' => 'Krin',
        'firstname' => 'Krin',
        'lastname' => 'Hall',
        'picture' => 'Krin_Hall.jpg',
        'is_connected' => true
    ],
    [
        'id' => 4,
        'username' => 'Owen',
        'firstname' => 'Owen',
        'lastname' => 'Lambert',
        'picture' => 'Owen_Lambert.jpg',
        'is_connected' => false
    ],
    [
        'id' => 5,
        'username' => 'juju94',
        'firstname' => 'Lorraine',
        'lastname' => 'Kelley',
        'picture' => 'Lorraine_Kelley.jpg',
        'is_connected' => true
    ],
];

function is_connected (): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function user_not_connect () : void
{
    if (!is_connected()) {
        header('Location: /src/View/login.php');
        exit();
    }
}

function user_connect () : void
{
    if (is_connected()) {
        header('Location: /src/View/tchat.php');
        exit();
    }
}
