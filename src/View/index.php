<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR  . 'Controller' . DIRECTORY_SEPARATOR . 'auth.php';
$h1 = 'Tekyn_chat';
$_SESSION['role'] = 'user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/asset/style.css">

    <title>
        <?php if (isset($title)) : ?>
            <?= $title; ?>
        <?php else: ?>
            Mon site
        <?php endif ?>
    </title>

</head>
<body>

    <span>
        <?php if (is_connected()): ?>
            <a href="/src/View/logout.php" class="disconnection">Se déconnecter -></a>
        <?php endif; ?>
    </span>
    <span class="all-index">
        <h1><?= $h1 ?></h1>
    </span>


</body>
</html>