<?php
include('database_connection.php');
require 'stripe_vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51MAOI4AP35BuKCdDF6qRXLb9TaRPdljdv0MUZgKmttZLd5swN6j5IYKzoYKHOjWtnx8YGAARGeyaPZgHcnp416ZJ00BWfu6R7f');

header('Content-Type: application/json');

$order_number = rand(100000, 999999);

try {
    $intent = \Stripe\PaymentIntent::create([
        'amount' => $_POST["total_amount"] * 100,
        'currency' => $_POST["currency_code"],
        'description' => $_POST["item_details"],
        'metadata' => ['order_id' => $order_number],
    ]);

    header("Location: HomePage.php");

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>