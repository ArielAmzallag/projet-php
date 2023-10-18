<?php

require_once 'controller.php';

// Assume a simple routing for demonstration purposes
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

// Route the request to the appropriate controller action
switch ($request_uri) {
    case '/':
        Controller::display_main_page();
        break;

    // ... other routes

    default:
        header('HTTP/1.1 404 Not Found');
        echo '404 Not Found';
        break;
}
