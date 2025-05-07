<?php
require 'stripe_vendor/autoload.php'; // Make sure Stripe PHP SDK is installed via Composer

\Stripe\Stripe::setApiKey('sk_test_51MAOI4AP35BuKCdDF6qRXLb9TaRPdljdv0MUZgKmttZLd5swN6j5IYKzoYKHOjWtnx8YGAARGeyaPZgHcnp416ZJ00BWfu6R7f'); // Replace with your Secret Key

header('Content-Type: application/json');

// You may receive amount & customer details via POST for dynamic total
$total = 10000; // Amount in cents (₱100.00)

try {
    $intent = \Stripe\PaymentIntent::create([
        'amount' => $total,
        'currency' => 'php',
        'metadata' => [
            'integration_check' => 'accept_a_payment',
            'order_id' => uniqid(),
        ]
    ]);

    echo json_encode([
        'clientSecret' => $intent->client_secret,
    ]);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>