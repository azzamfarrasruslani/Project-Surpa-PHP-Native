<?php
// config.php

// Configuration for the environment
define('CI_ENVIRONMENT', 'development');

// Configuration for the application
$appConfig = [
    'baseURL' => 'http://localhost/WEB-SuratPaket/public/',
    'forceGlobalSecureRequests' => false,
    'CSPEnabled' => false,
];

// Configuration for the database
$dbConfig = [
    'hostname' => 'localhost',
    'database' => 'suratpaket',
    'username' => 'root',
    'password' => '',
    'DBDriver' => 'MySQLi',
    'DBPrefix' => '',
    'port' => 3306,
];

// Helper function to get baseURL
function baseURL() {
    global $appConfig;
    return $appConfig['baseURL'];
}

// Example usage of the configurations
try {
    $dsn = "mysql:host={$dbConfig['hostname']};dbname={$dbConfig['database']};port={$dbConfig['port']}";
    $pdo = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

?>
