<?php
include_once 'config/db.php';
include_once 'controllers/customerController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    $customerController = new CustomerController($pdo);
    $customerController->register($name, $email, $location);

    echo "Customer registered successfully!";
}
?>
