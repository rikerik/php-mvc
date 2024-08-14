<?php
// necessary files
require_once 'controllers/UserController.php';
require_once 'controllers/AdController.php';
require_once 'models/UserModel.php';
require_once 'models/AdModel.php';

// initialize controllers
$userController = new UserController();
$adController = new AdController();

// get the url from the query parameter
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Route based on the URL
switch ($url) {
    case '':
        // default route
        include 'views/index.php';
        break;

        //route for users
    case 'view_all_users':
        $userController->index();
        break;

        //route for ads
    case 'view_all_ads':
        $adController->index();
        break;

    default:
        // handle 404 Not Found
        http_response_code(404);
        echo '404 Not Found';
        break;
}
?>
