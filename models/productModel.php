<?php
// models/productModel.php

class Product {
    private $pdo;

    // Constructor to initialize the database connection
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Method to add a product to the cart
    public function addToCart($customer_id, $product_id) {
        $stmt = $this->pdo->prepare("INSERT INTO cart (customer_id, product_id) VALUES (?, ?)");
        $stmt->execute([$customer_id, $product_id]);
    }

    // Method to get all cart items for a specific customer
    public function getCartItems($customer_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM cart c JOIN retailers r ON c.product_id = r.id WHERE c.customer_id = ?");
        $stmt->execute([$customer_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all cart items
    }
}
?>
