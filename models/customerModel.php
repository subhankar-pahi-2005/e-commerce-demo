<?php
class Customer {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function register($name, $email, $location) {
        $stmt = $this->pdo->prepare("INSERT INTO customers (name, email, location) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $location]);
    }
}
?>
