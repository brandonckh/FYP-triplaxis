@include ('header', ['title' => 'Sign-Up | Triplaxis'])
@include ('navigation')
<div class="container"> 
<h1>Create your account here!</h1>
<form method="post" action="post-reg"> 
{{ csrf_field() }}
  <div class="row">
    <div class="col">
    	<label for="firstname1">First Name</label>
      <input type="text" name="firstname" class="form-control" required placeholder="First name">
    </div>
    <div class="col">
    	<label for="lastname1">Last Name</label>
      <input type="text" name="lastname" class="form-control" required placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col">
    	<label for="Email">E-mail Address</label>
      <input type="email" name="email" class="form-control" required placeholder="E-mail Address"> 
    </div>
    <div class="col">
    	<label for="hpnumber">Mobile Number</label>
      <input type="text" class="form-control" name="mobile" required placeholder="Mobile Number">
    </div>
  </div>

  <div class="row">
    <div class="col">
    	<label for="password1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" id="pwdtmplate"maxlength=20 minlength=8 required>
      <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
  	  </small>
    </div>
   <div class="col">
    	<label for="confirmpassword1">Confirm Password</label>
      <input type="password" required class="form-control" onkeyup="checklogin(this)" minlength="8" maxlength="" placeholder="Confirm Password">

      <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.</small>
    </div>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I want to receive exclusive offers and promotions from Triplaxis
      </label>
      <br>
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Agree on the <a target="_blank" href="{{ url('tos') }}">Terms & Conditions</a>        
      </label>

    </div>
  </div>
  <button id="baten" type="submit" class="btn btn-primary">Sign Up Now!</button>
</form></div>
<script>
	function checklogin(doc){
		if (doc.value !== document.getElementById('pwdtmplate').value){
			document.getElementById('baten').disabled = 'true';
			doc.style.border = '2px solid red';
		} else {
			document.getElementById('baten').disabled = '';
			doc.style.border = ''
		}
	}
</script>
@include ('footer')
