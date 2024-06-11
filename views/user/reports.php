<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports</title>
</head>
<body>
    <h1>Generate Financial Reports</h1>
    <form action="/generate-report" method="GET">
        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" required>
        <label for="end_date">End Date</label>
        <input type="date" name="end_date" required>
        <button type="submit">Generate Report</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['start_date']) && isset($_GET['end_date'])) {
        require_once '../../controllers/ReportController.php';
        $reportController = new ReportController();
        $report = $reportController->generate($_GET['start_date'], $_GET['end_date']);
        echo "<h2>Report from {$_GET['start_date']} to {$_GET['end_date']}</h2>";
        echo "<p>Revenue: {$report['revenue']}</p>";
        echo "<p>Expenses: {$report['expenses']}</p>";
        echo "<p>Profit: {$report['profit']}</p>";
    }
    ?>
</body>
</html>
