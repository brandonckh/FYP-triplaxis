@include ('header', ['title' => 'Payment | Triplaxis'])
@include ('navigation')
<div>
<form class="needs-validation" novalidate>
  <div class="container">
	<div class="row">
		<div class="paymentCont">
						<div class="headingWrap">
								<h3 class="headingTop text-center">Choose Payment Option</h3>	
								
						</div>
						<div class="paymentWrap">
							<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
					            <label class="btn paymentMethod active">
					            	<div class="method creditdebit"></div>
					                <input type="radio" name="options" checked> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method paypal"></div>
					                <input type="radio" name="options">
					            </label>   
					        </div>  
						<div class="form-row">							
							<h5>credit/debit card</h5> 	
							<h5>paypal</h5>
						</div>
						</div>
		<div class="form-row">
		<div class="col-md-10 mb-3">
		<label for="validationCustom01">CARD NUMBER</label>
		<input type="text" class="form-control" id="validationCustom01" placeholder="Valid Card Number" value="" required>
		<div class="invalid-feedback">
		Card number is required.
		</div>
		</div>
		</div>
		<div class="form-row">
		<div class="col-md-5 mb-3">
		<label for="validationCustom02">EXPIRATION DATE</label>
		<input type="text" class="form-control" id="validationCustom02" placeholder="FMM / YY" value="" required>
		<div class="invalid-feedback">
      	This field is required.
		</div>
		</div>
		<div class="col-md-5 mb-3">
		<label for="validationCustom03">CV CODE</label>
		<input type="text" class="form-control" id="validationCustom03" placeholder="CVC" value="" required>
		<div class="invalid-feedback">
		This field is required.      
		</div>
		</div>
		</div>
		<div class="form-row">
		<div class="col-md-5 mb-3">
			<label for="validationCustom04">PROMO CODE</label>
			<input type="text" class="form-control" id="validationCustom04" placeholder="" value="" required>
			<div class="valid-feedback">			
			</div>
		</div>
		</div>		
		</div>
	</div>	
	<a href="{{ url('successful_pay') }}"><button class="btn btn-success pull-right btn-fyi need-validation" type="button">PROCEED TO CHECKOUT</button></a>
</div>
</form>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>
@include ('footer')
