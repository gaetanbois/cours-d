<?php 


require('vendor/autoload.php');

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'todolist',
    'username' => 'coursSQL1',
    'password' => 'BgJUUXN1Z9p5JklN',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
    'charset' => 'utf8mb4'
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$conn->connect();
