<?php
require_once '../config/database.php';

class InvoiceController {
    public function create($client_id, $date, $items) {
        global $conn;
        $conn->begin_transaction();
        try {
            $sql = "INSERT INTO invoices (client_id, date, total) VALUES ('$client_id', '$date', 0)";
            $conn->query($sql);
            $invoice_id = $conn->insert_id;

            $total = 0;
            foreach ($items as $item) {
                $product_service_id = $item['product_service_id'];
                $quantity = $item['quantity'];
                $price = $item['price'];
                $total += $quantity * $price;

                $sql = "INSERT INTO invoice_items (invoice_id, product_service_id, quantity, price)
                        VALUES ('$invoice_id', '$product_service_id', '$quantity', '$price')";
                $conn->query($sql);
            }

            $sql = "UPDATE invoices SET total='$total' WHERE id='$invoice_id'";
            $conn->query($sql);

            $conn->commit();
            echo "Invoice created successfully";
        } catch (Exception $e) {
            $conn->rollback();
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
