<?php
require_once '../config/database.php';

class ReportController {
    public function generate($start_date, $end_date) {
        global $conn;

        $sql = "SELECT SUM(total) AS revenue FROM invoices WHERE date BETWEEN '$start_date' AND '$end_date'";
        $result = $conn->query($sql);
        $revenue = $result->fetch_assoc()['revenue'];

        $sql = "SELECT SUM(amount) AS expenses FROM expenses WHERE date BETWEEN '$start_date' AND '$end_date'";
        $result = $conn->query($sql);
        $expenses = $result->fetch_assoc()['expenses'];

        $profit = $revenue - $expenses;

        return [
            'revenue' => $revenue,
            'expenses' => $expenses,
            'profit' => $profit
        ];
    }
}
?>
