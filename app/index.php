<?php
// index.php

// Include the configuration and routes
include 'config.php';
include 'routes.php';

// Get the requested URL
$requestedUrl = $_SERVER['REQUEST_URI'];

// Parse the URL to remove query string if any
$urlComponents = parse_url($requestedUrl);
$path = $urlComponents['path'];

// Route the request to the appropriate controller
route($path);


