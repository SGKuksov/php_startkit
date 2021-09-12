<?php

include '../app/vendor/autoload.php';
use Otus\Lessons\Lesson4\Example;

$example = new Example;
echo $example->getName() . PHP_EOL;

$username = "root";
$password = "root";

try {
    $conn = new PDO('mysql:host=host.docker.internal;port=8989;dbname=test_db', $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
