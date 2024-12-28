<?php
class Retailer {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function register($name, $email, $location, $product) {
        $stmt = $this->pdo->prepare("INSERT INTO retailers (name, email, location, product) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $location, $product]);
    }

    public function searchProductsByLocation($location) {
        $stmt = $this->pdo->prepare("SELECT * FROM retailers WHERE location = ?");
        $stmt->execute([$location]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
