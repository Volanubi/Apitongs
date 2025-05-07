<?php

//order_process.php

session_start();

$total_price = 0;

$item_details = '';

$order_details = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th>Product Name</th>  
            <th>Quantity</th>  
            <th>Price</th>  
            <th>Total</th>  
        </tr>
';

if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$order_details .= '
		<tr>
			<td>'.$values["product_name"].'</td>
			<td>'.$values["product_quantity"].'</td>
			<td align="right">₱ '.$values["product_price"].'</td>
			<td align="right">₱ '.number_format($values["product_quantity"] * 800 + $values["product_price"], 2).'</td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * 800 + $values["product_price"]);

		$item_details .= $values["product_name"] . ', ';
	}
	$item_details = substr($item_details, 0, -2);
	$order_details .= '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">₱ '.number_format($total_price, 2).'</td>
    </tr>
	';
}
$order_details .= '</table>';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Shopping Cart with Stripe Payment Integration</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://js.stripe.com/v3/"></script>
		<script src="js/jquery.creditCardValidator.js"></script>
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		.require
		{
			border:1px solid #FF0000;
			background-color: #cbd9ed;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<br />
			<h3 align="center">PAYMENT</h3>
			<br />
			<span id="message"></span>
			<div class="panel panel-default">
				<div class="panel-heading">Order Process</div>
				<div class="panel-body">
					<form method="post" id="order_process_form" action="payment.php">
						<div class="row">
							<div class="col-md-8" style="border-right:1px solid #ddd;">
								<h4 align="center">Customer Details</h4>
								<div class="form-group">
									<label><b>Card Holder Name <span class="text-danger">*</span></b></label>
							        <input type="text" name="customer_name" id="customer_name" class="form-control" value="" />
							        <span id="error_customer_name" class="text-danger"></span>
							    </div>
	    						<div class="form-group">
	    							<label><b>Email Address <span class="text-danger">*</span></b></label>
	    							<input type="text" name="email_address" id="email_address" class="form-control" value="" />
	    							<span id="error_email_address" class="text-danger"></span>
	    						</div>
	    						<div class="form-group">
	    							<label><b>Address <span class="text-danger">*</span></b></label>
	    							<textarea name="customer_address" id="customer_address" class="form-control"></textarea>
	    							<span id="error_customer_address" class="text-danger"></span>
	    						</div>
	    						<div class="row">
	    							<div class="col-sm-6">
	    								<div class="form-group">
		    								<label><b>City <span class="text-danger">*</span></b></label>
			    							<input type="text" name="customer_city" id="customer_city" class="form-control" value="" />
			    							<span id="error_customer_city" class="text-danger"></span>
			    						</div>
	    							</div>
	    							<div class="col-sm-6">
	    								<div class="form-group">
	    									<label><b>Zip <span class="text-danger">*</span></b></label>
			    							<input type="text" name="customer_pin" id="customer_pin" class="form-control" value="" />
			    							<span id="error_customer_pin" class="text-danger"></span>
			    						</div>
	    							</div>
	    						</div>
	    						<div class="row">
	    							<div class="col-sm-6">
	    								<div class="form-group">
		    								<label><b>State </b></label>
			    							<input type="text" name="customer_state" id="customer_state" class="form-control" value="" />
			    						</div>
	    							</div>
	    							<div class="col-sm-6">
	    								<div class="form-group">
		    								<label><b>Country <span class="text-danger">*</span></b></label>
		    								<input type="text" name="customer_country" id="customer_country" class="form-control" />
		    								<span id="error_customer_country" class="text-danger"></span>
			    						</div>
	    							</div>
	    						</div>
	    						<hr />
	    						<h4 align="center">Payment Details</h4>
	    						<div class="form-group">
						            <label>Card Number <span class="text-danger">*</span></label>
						            <input type="text" name="card_holder_number" id="card_holder_number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="" />
						            <span id="card-errors" class="text-danger"></span>
						        </div>
						        <div class="form-group">
						          	<div class="row">
						          		<div class="col-md-4">
						          			<label>Expiry Month</label>
						          			<input type="text" name="card_expiry_month" id="card_expiry_month" class="form-control" placeholder="MM" maxlength="2" onkeypress="return only_number(event);" />
						          			<span id="card-errors" class="text-danger"></span>
						          		</div>
						          		<div class="col-md-4">
						          			<label>Expiry Year</label>
						          			<input type="text" name="card_expiry_year" id="card_expiry_year" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return only_number(event);" />
						          			<span id="card-errors" class="text-danger"></span>
						          		</div>
						          		<div class="col-md-4">
						          			<label>CVC</label>
						          			<input type="text" name="card_cvc" id="card_cvc" class="form-control" placeholder="123" maxlength="4" onkeypress="return only_number(event);" />
						          			<span id="card-errors" class="text-danger"></span>
						          		</div>
						          	</div>
						        </div>
						        <br />
								<div align="center">
									<input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
									<input type="hidden" name="currency_code" value="PHP" />
									<input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
									<input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Pay Now" />
								</div>
								<br />
							</div>
							<div class="col-md-4">
								<h4 align="center">Order Details</h4>
								<?php
								echo $order_details;
								?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script>
    const stripe = Stripe('pk_test_51MAOI4AP35BuKCdDYa7Vuus3ry8o3785hYB6NEcyu72VxUFk7A3bdXm0XBNIF9Fz12ud7dcsjU1SJdUKDf882gLT00rPoJgGuK'); // Replace with your public key
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card_holder_number');

    function validate_form() {
        let valid = true;
        $('#order_process_form input').each(function () {
            if (!$(this).val()) {
                $(this).css('border-color', 'red');
                valid = false;
            } else {
                $(this).css('border-color', '');
            }
        });
        return valid;
    }

    $('#order_process_form').on('submit', async function (e) {
        e.preventDefault();
        $('#card-errors').text('');

        if (!validate_form()) {
            $('#card-errors').text('Please fill all fields.');
            return;
        }

        $('#button_action').attr('disabled', true).val('Processing...');

        try {
            const response = await fetch('payment.php');
            const data = await response.json();

            if (data.error) throw new Error(data.error);

            const result = await stripe.confirmCardPayment(data.clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: $('#customer_name').val(),
                        email: $('#email_address').val(),
                        address: {
                            line1: $('#customer_address').val(),
                            city: $('#customer_city').val(),
                            state: $('#customer_state').val(),
                            postal_code: $('#customer_pin').val(),
                            country: $('#customer_country').val()
                        }
                    }
                }
            });

            if (result.error) {
                $('#card-errors').text(result.error.message);
                $('#button_action').attr('disabled', false).val('Pay Now');
            } else if (result.paymentIntent.status === 'succeeded') {
				window.location.href = 'Packages.php';
                $('#order_process_form')[0].reset();
                card.clear();
                $('#button_action').attr('disabled', false).val('Pay Now');
            }
        } catch (error) {
            $('#card-errors').text(error.message);
            $('#button_action').attr('disabled', false).val('Pay Now');
        }
    });
</script>

	</body>
</html>

