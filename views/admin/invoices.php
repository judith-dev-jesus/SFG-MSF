<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Invoices</title>
</head>
<body>
    <h1>Manage Invoices</h1>
    <form action="/create-invoice" method="POST">
        <label for="client_id">Client</label>
        <select name="client_id" required>
            <?php
            require_once '../../config/database.php';
            $sql = "SELECT id, name FROM clients_suppliers WHERE type='client'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['name']}</option>";
            }
            ?>
        </select>
        <input type="date" name="date" required>
        <label for="items">Items (product_service_id, quantity, price per unit)</label>
        <textarea name="items" placeholder='[{"product_service_id":1,"quantity":2,"price":50.00}]' required></textarea>
        <button type="submit">Create Invoice</button>
    </form>

    <h2>List of Invoices</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Date</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT invoices.id, clients_suppliers.name AS client_name, invoices.date, invoices.total 
                    FROM invoices 
                    JOIN clients_suppliers ON invoices.client_id = clients_suppliers.id";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['client_name']}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['total']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
