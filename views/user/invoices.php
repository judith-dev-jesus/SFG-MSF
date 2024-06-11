<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Invoices</title>
</head>
<body>
    <h1>My Invoices</h1>
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
            require_once '../../config/database.php';
            $userId = $_SESSION['user_id']; // Supondo que a sessão esteja gerenciada
            // $sql = "SELECT invoices.id, clients_suppliers.name"
            $sql = "SELECT invoices.id, clients_suppliers.name AS client_name, invoices.date, invoices.total 
                    FROM invoices 
                    JOIN clients_suppliers ON invoices.client_id = clients_suppliers.id
                    WHERE clients_suppliers.id = $userId";
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
