<?php
require_once '../config/database.php';

class ClientSupplierController {
    public function create($name, $type, $email, $phone, $address) {
        global $conn;
        $sql = "INSERT INTO clients_suppliers (name, type, email, phone, address)
                VALUES ('$name', '$type', '$email', '$phone', '$address')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>