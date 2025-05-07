<?php
include('database_connection.php');
require 'stripe_vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51MAOI4AP35BuKCdDF6qRXLb9TaRPdljdv0MUZgKmttZLd5swN6j5IYKzoYKHOjWtnx8YGAARGeyaPZgHcnp416ZJ00BWfu6R7f');

session_start();

if (isset($_POST['payment_intent_id'])) {
    try {
        $intent = \Stripe\PaymentIntent::retrieve($_POST['payment_intent_id']);
        $response = $intent->jsonSerialize();

        if (
            $response["amount_refunded"] == 0 &&
            empty($response["failure_code"]) &&
            $response['status'] == 'succeeded'
        ) {
            $amount = $response["amount"] / 100;
            $order_number = $response["metadata"]["order_id"];

            $order_data = array(
                ':order_number'         => $order_number,
                ':order_total_amount'   => $amount,
                ':transaction_id'       => $response["charges"]["data"][0]["balance_transaction"],
                ':card_cvc'             => '', // Not available via Stripe response anymore
                ':card_expiry_month'    => '',
                ':card_expiry_year'     => '',
                ':order_status'         => $response["status"],
                ':card_holder_number'   => '', // Not available either
                ':email_address'        => $_POST['email_address'],
                ':customer_name'        => $_POST["customer_name"],
                ':customer_address'     => $_POST['customer_address'],
                ':customer_city'        => $_POST['customer_city'],
                ':customer_pin'         => $_POST['customer_pin'],
                ':customer_state'       => $_POST['customer_state'],
                ':customer_country'     => $_POST['customer_country']
            );

            $query = "INSERT INTO order_table 
                (order_number, order_total_amount, transaction_id, card_cvc, card_expiry_month, card_expiry_year, order_status, card_holder_number, email_address, customer_name, customer_address, customer_city, customer_pin, customer_state, customer_country) 
                VALUES (:order_number, :order_total_amount, :transaction_id, :card_cvc, :card_expiry_month, :card_expiry_year, :order_status, :card_holder_number, :email_address, :customer_name, :customer_address, :customer_city, :customer_pin, :customer_state, :customer_country)";

            $statement = $connect->prepare($query);
            $statement->execute($order_data);

            $order_id = $connect->lastInsertId();

            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                $order_item_data = array(
                    ':order_id' => $order_id,
                    ':order_item_name' => $values["product_name"],
                    ':order_item_quantity' => $values["product_quantity"],
                    ':order_item_price' => $values["product_price"]
                );

                $query = "INSERT INTO order_item 
                    (order_id, order_item_name, order_item_quantity, order_item_price) 
                    VALUES (:order_id, :order_item_name, :order_item_quantity, :order_item_price)";

                $statement = $connect->prepare($query);
                $statement->execute($order_item_data);
            }

            unset($_SESSION["shopping_cart"]);
            $_SESSION["success_message"] = "Payment succeeded. TXN ID: " . $response["charges"]["data"][0]["balance_transaction"];
            header("Location: Packages.php");
            exit;
        } else {
            echo json_encode(['error' => 'Payment not successful.']);
        }

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
}   
?>
