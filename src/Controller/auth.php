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
    [
        'id' => 6,
        'username' => 'Kristin',
        'firstname' => 'Kristin',
        'lastname' => 'Burns',
        'picture' => 'Kristin_Burns.jpg',
        'is_connected' => true
    ],
    [
        'id' => 7,
        'username' => 'Leon',
        'firstname' => 'Leon',
        'lastname' => 'Wallace',
        'picture' => 'Leon_Wallace.jpg',
        'is_connected' => false
    ],
    [
        'id' => 8,
        'username' => 'Melinda',
        'firstname' => 'Melinda',
        'lastname' => 'Phillips',
        'picture' => 'Melinda_Phillips.jpg',
        'is_connected' => true
    ],
    [
        'id' => 9,
        'username' => 'Ramon',
        'firstname' => 'Ramon',
        'lastname' => 'Sanchez',
        'picture' => 'Ramon_Sanchez.jpg',
        'is_connected' => true
    ],
    [
        'id' => 10,
        'username' => 'Wendy',
        'firstname' => 'Wendy',
        'lastname' => 'Walker',
        'picture' => 'Wendy_Walker.jpg',
        'is_connected' => false
    ],
    [
        'id' => 11,
        'username' => 'Zoey',
        'firstname' => 'Zoey',
        'lastname' => 'Diaz',
        'picture' => 'Zoey_Diaz.jpg',
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

function login()
{
    if (!empty($_POST['username'])) {
        if($_POST['username'] === 'cyril') {
            session_start();
            $_SESSION['connecte'] =1;
            header('Location: /src/View/tchat.php');
        } else {
            $error = "username incorrect";
        }
    }
    return $error;
}



