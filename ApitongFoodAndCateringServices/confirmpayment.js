stripe.confirmCardPayment(clientSecret, {
    payment_method: {
      card: cardElement,
      billing_details: {
        name: customer_name,
        email: email_address,
        address: customer_address,
        city: customer_city,
        pin: customer_pin,
        state: customer_state,
        country: customer_country
      }
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer
    } else {
      if (result.paymentIntent.status === 'succeeded') {
        // ✅ Send result.paymentIntent.id to PHP
        fetch('confirm_payment.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: new URLSearchParams({
            payment_intent_id: result.paymentIntent.id,
            email_address: email_address,
            customer_name: customer_name,
            customer_address: customer_address,
            customer_city: customer_city,
            customer_pin: customer_pin,
            customer_state: customer_state,
            customer_country: customer_country
            // etc.
          })
        });
      }
    }
  });