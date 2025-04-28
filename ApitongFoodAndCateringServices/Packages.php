<?php
//index.php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Packages</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/Packagescss.css">
</head>
<body>
<nav class="shift navbar sticky-top navbar-expand-lg">
<div class="container-fluid">
  <a class="navbar-brand" href="HomePage.php">
<img src ="pictures/apitonglogo.png" class="img-responsive logo">
</a>

  <button class="navbar-toggler mr-left custom-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
>			<span class="navbar-toggler-icon"></span>
            </button>

             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                   
					<li class="nav-item nav-a">
                        <a class="nav-link" href="HomePage.php" style="font-size: 1.6rem;">Home</a>
                    </li>

                    <li class="nav-item nav-a">
                        <a class="nav-link" href="Packages.php" style="font-size: 1.6rem;">Packages</a>
                    </li>

                    <li class="nav-item nav-a">
                        <a class="nav-link" href="About.php" style="font-size: 1.6rem;">About Us</a>
                    </li>
					
                <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">


					<div class="input-group">
						<a href="Logout.php"><button name="submit" class="btn" style="background-color: red; font-size: 1.6rem;">Logout</button></a>
	
					</div>
          </div>


</nav>

		<div class="container">
			<br />
			<h3 style="text-align:center; color: white;">Packages</h3>
			<br />
				<div class="container-fluid">
					<div id="cart" class="container" style="color:gray;">
						<ul>
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">₱ 0.00</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div style="text-align:right;">
					<a href="order_process.php" class="btn btn-primary" id="check_out_cart">
						<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
						<span class="glyphicon glyphicon-trash"></span> Clear
					</a>
				</div>
			</div>

			
			
			<?php
				if(isset($_SESSION["success_message"]))
				{
					echo '
					<div class="alert alert-success">
					'.$_SESSION["success_message"].'
					</div>
					';
					unset($_SESSION["success_message"]);
				}
				?>

			<div id="display_item" class="row">

			</div>

				
				<br />
				<br />
			</div>
		</div>
		<!-- Footer  -->
<div class="global">
	<div class="curve"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-md-3">
					<h6>Legal</h6>
				<ul >
					<li><a href="TermsCondition.php">Terms & Conditions</a></li>
					<li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
				</ul>
			  </div>
				<div class="col-md-6 col-md-3">
					<h6>Support</h6>
				<ul >
					<li>Phone Number: +639178883334</li>
					<li>Landline: 394-7896<li>
					<li>Email: apitongscatering@business.com</li>
				</ul>
			  </div>
			
				<div class="social">
					<a href="https://www.facebook.com/Dirtysoda11"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/RAVEN75754452?s=09"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/algeralddelapaz/"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-snapchat-ghost"></i></a>
			  </div>
		  </div>
			 <p class="copyright"> &copy; Apitongs Food & Catering Services. All Rights Reserved</p>
		
		</div>
</div>
		  
	</body>
</html>

<script>  
$(document).ready(function(){

	load_product();

	load_cart_data();

	function load_product()
	{
		$.ajax({
			url:"fetch_item.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		})
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		})
	}

	$('#cart-popover').popover({
		html : true,
		container : 'body',
		content:function(){
			return $('#popover_content_wrapper').html();
		}
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr('id');
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = 'add';
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			})
		}
		else
		{
			alert("Please Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr('id');
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function(data)
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		})
	});
    
});

</script>