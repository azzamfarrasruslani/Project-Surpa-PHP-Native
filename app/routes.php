<?php
// routes.php

function route($path) {
    switch ($path) {
        case '/':
        case '/index.php':
            include 'controllers/Home.php';
            break;
        case '/about':
        case '/about.php':
            include 'controllers/about.php';
            break;
        case '/contact':
        case '/contact.php':
            include 'controllers/contact.php';
            break;
        default:
            include 'controllers/404.php';
            break;
    }
}

