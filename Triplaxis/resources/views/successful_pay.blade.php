@include ('header', [ 'title' => 'Payment Successful | Triplaxis'])
@include ('navigation')
<div>
	<div class="alert alert-success" role="alert">
  	<h4 class="alert-heading">Payment Successful!</h4>
  	<p>Congratulations! Your payment is successful and your order will be processed by our professional team real soon. Please be patient until you have received your order. Thank You!</p>
  	<hr>
  	<p class="mb-0">Please click the button below or go to the Check Order Status page to check your order status.</p>
	</div>
	
	<p class="font-weight-normal"><a class="btn btn-primary" href="#" role="button">Check Order Status</a><a href="#"> &lt;&lt;&lt; Go back home</a></p>
</div>
<div>
	<div class="alert alert-danger" role="alert">
		<h4 class="alert-heading">Payment Failed!</h4>
		Order is not processed. Please try again or contact your payment service provider.
  	<hr>
  	<p class="mb-0">Please click the button below to go back to home page.</p>
	</div>
	<!-- <a class="btn btn-primary" href="#" role="button">Home</a> -->
	<p class="font-weight-normal"><a href="#">Go back home</a></p>
</div>

@include ('footer')

