@include ('header', ['title'=> 'Successful | triplaxis'])
@include ('navigation')
<div>
	<div style="height: 40px"></div>
	<div class="alert alert-success" role="alert">
  	<h4 class="alert-heading">Submit Successful!</h4>
  	<p>Congratulations! Your design has be submitted successfully. Please be patient while our team review and approve your design to be sold (or) printed. Thank You!</p>
  	<hr>
  	<p class="mb-0">After your design is approved it will appear on your uploads page in your profile.</p>
	</div>
	
	<p class="font-weight-normal"><a class="btn btn-primary" href="{{ url('/') }}" role="button">Go Back Home</a></p>
</div>
@include ('footer')
