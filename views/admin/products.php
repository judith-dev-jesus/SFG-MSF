<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products and Services</title>
</head>
<body>
    <h1>Manage Products and Services</h1>
    <form action="/create-product-service" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <input type="number" name="stock" placeholder="Stock" required>
        <button type="submit">Add</button>
    </form>

    <h2>List of Products and Services</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            $sql = "SELECT * FROM products_services";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['stock']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
