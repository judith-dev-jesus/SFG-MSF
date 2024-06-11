<?php
require_once '../config/database.php';

class ProductServiceController {
    public function create($name, $description, $price, $stock) {
        global $conn;
        $sql = "INSERT INTO products_services (name, description, price, stock)
                VALUES ('$name', '$description', '$price', '$stock')";
        if ($conn->query($sql) === TRUE) {
            echo "New product/service created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
