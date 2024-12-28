<?php
include_once 'config/db.php';
include_once 'controllers/retailerController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $product = $_POST['product'];

    $retailerController = new RetailerController($pdo);
    $retailerController->register($name, $email, $location, $product);

    echo "Retailer registered successfully!";
}
?>
