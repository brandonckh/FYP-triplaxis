@include ('header' , ['title' => 'Contact Us | Triplaxis'])
@include ('navigation')

  <form class="needs-validation" novalidate>
  <div style="display: flex" class="container">
<div style="min-width: 48em">
  	<h1>Contact Us</h1>
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name:</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
      <div class="invalid-feedback">
      	First name is required.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Last name:</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
      <div class="invalid-feedback">
      Last name is required.      
      </div>
   </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Email:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="abc@hotmail.com" required>
      <div class="invalid-feedback">
        Please provide a valid email.
      </div>
 	</div>
     <div class="col-md-6 mb-3">
      <label for="validationCustom04">Phone Number:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="+60123456789" required>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Message:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Enter your message here" required>
      <div class="invalid-feedback">
        Please enter your message here.
      </div>
    </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
	<div class="col-md-4 mb-3">
		<p class="text-right"><h3>Our Website</h3></p>
		<a href="#" class="text-light bg-dark">www.triplaxis.com</a>
		<p class="text-right"><h3>General Support</h3></p>
		<a href="#" class="text-light bg-dark">vincentlim@triplaxis.com </a>
		<a href="#" class="text-light bg-dark">simonechong@triplaxis.com</a>	
	</div>
</div>
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
@include ('footer')
