
<?php

require __DIR__.'auth.php';

use App\Controller\LoginController;

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/src/View/login.php' === $urlPath) {
    (new LoginController())->login();
} else {
    header('HTTP/1.1 404 Not Found');
}