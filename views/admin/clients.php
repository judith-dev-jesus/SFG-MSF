<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Clients and Suppliers</title>
</head>
<body>
    <h1>Manage Clients and Suppliers</h1>
    <form action="/create-client-supplier" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <select name="type" required>
            <option value="client">Client</option>
            <option value="supplier">Supplier</option>
        </select>
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Phone">
        <textarea name="address" placeholder="Address"></textarea>
        <button type="submit">Add</button>
    </form>

    <h2>List of Clients and Suppliers</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            $sql = "SELECT * FROM clients_suppliers";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['type']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
