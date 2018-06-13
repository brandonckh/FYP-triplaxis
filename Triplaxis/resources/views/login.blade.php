@include ('header', ['title' => $Type . " Login | Triplaxis" ])
<div class="tile"></div>
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="780418787251-88eja0jn9tbmr0jdkptu4vslhjknahhe.apps.googleusercontent.com">
  <div class="boxed">
    <div class="min-form-width">
	@if ($Type !== "Forgotten")
	<h2>{{ $Type }} Login</h2>
	<form method="post" action="post-reg" style="border-right:1px solid #ddd">
	@else
	<form method="post" action="post-reg">
	@endif
	{{ csrf_field() }}

	@if ($Type !== "Forgotten")

	  <div class="form-group col-8">       
            <label for="exampleInputEmail1">{{ $Type }} ID</label>
            <input type="hidden" name="type" value="{{ $Type }}" />
            <input type="email" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter {{ $Type }} ID">
            <small id="emailHelp" class="form-text text-muted">Please enter {{ $Type }} ID</small>
	  </div>

          <div class="form-group col-8">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Please enter {{ $Type }} password</small>
	 </div>
	
	
         <div class="">
            <button type="submit" class="btn btn-primary">Submit</button>
	    <a  class="btn button" href="{{ url('forget-password') }}">Forgot Password</a>
          </div>
	@else
	    <H1>{{ $Type }} your password?</H1>
	    <p> It always happens! No Worries if you have forgotten your password because we are here to help<br> Just enter your email address in the following and login to your email to reset password.</p>
	    <p>Please enter email address Below:</p>
	   <div style="display: flex">
	    <input type="email" class="form-control" id="id" placeholder="Email Address" >
            <button type="submit" class="btn btn-primary" style="margin-left: auto">Reset</button></input></div>
	  @endif
	  </div>
        </form>
@if ($Type !== "Forgotten") 
<div class="owo" style="margin:4em">
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-longtitle="true" data-width="253" data-height="40"></div>
<div  style="margin: 2em 0" class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
    <button class="btn button" >Create Account </button>
      </div>
</div>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
function onSignIn(googleUser) {
	var data = "";
	      var profile = googleUser.getBasicProfile();
       data += "\nID: " + profile.getId(); // Don't send this directly to your server!
       data += '\nFull Name: ' + profile.getName();
      data +='\nGiven Name: ' + profile.getGivenName();
       data += '\nFamily Name: ' + profile.getFamilyName();
       data += "\nImage URL: " + profile.getImageUrl();
       data +="\nEmail: " + profile.getEmail();
console.log(data)
       // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
      console.log("Facebook ID Token: " + id_token);
                     };
             </script>

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : 239410933306668,
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v3.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.target="_top";
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

    FB.login(function(response) {
    if (response.authResponse) {
     alert('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       alert('Good to see you, ' + response.name + '.');
     });
    } else {
     alert('User cancelled login or did not fully authorize.');
    }
    });
   </script>
@endif
@include ('closing')
