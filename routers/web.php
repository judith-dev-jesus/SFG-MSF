<?php
require_once './controllers/ClientSupplierController.php';
require_once './controllers/ProductServiceController.php';
require_once './controllers/InvoiceController.php';
require_once './controllers/ReportController.php';

$clientSupplierController = new ClientSupplierController();
$productServiceController = new ProductServiceController();
$invoiceController = new InvoiceController();
$reportController = new ReportController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/create-client-supplier' && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $clientSupplierController->create($_POST['name'], $_POST['type'], $_POST['email'], $_POST['phone'], $_POST['address']);
} elseif ($uri === '/create-product-service' && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $productServiceController->create($_POST['name'], $_POST['description'], $_POST['price'], $_POST['stock']);
} elseif ($uri === '/create-invoice' && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $invoiceController->create($_POST['client_id'], $_POST['date'], $_POST['items']);
} elseif ($uri === '/generate-report' && $_SERVER['REQUEST_METHOD'] === 'GET') {
  $report = $reportController->generate($_GET['start_date'], $_GET['end_date']);
  echo json_encode($report);
} else {
  echo "404 Not Found";
}
