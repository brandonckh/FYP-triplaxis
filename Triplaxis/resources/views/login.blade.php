@include ('header', ['title' => $Type . " Login | Triplaxis" ])
<div class="tile"></div>
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="780418787251-u4jg709ql5oft4u4ceeaaa8uv4k7nob0.apps.googleusercontent.com">
  <div class="boxed">
    <div class="min-form-width">
        <h2>{{ $Type }} Login</h2>
        <form style="border-right:1px solid #ddd">
          <div class="form-group col-8">
            <label for="exampleInputEmail1">{{ $Type }} ID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter {{ $Type }} ID">
            <small id="emailHelp" class="form-text text-muted">Please enter {{ $Type }} ID</small>
          </div>
          <div class="form-group col-8">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Please enter {{ $Type }} password</small>
          </div>
         <div class="">
            <button type="submit" class="btn btn-primary">Submit</button>
    <button class="btn button" >Forgot Password</button>
          </div>

        </form>
    </div>
      <!-- kwwkwk -->
<div class="owo" style="margin:4em">
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-longtitle="true" data-width="253" data-height="40"></div>
    <div  style="margin: 2em 0" class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
    <button class="btn button" >Create Account </button>
      </div>
</div>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
      function onSignIn(googleUser) {
         var profile = googleUser.getBasicProfile();
       console.log("ID: " + profile.getId()); // Don't send this directly to your server!
       console.log('Full Name: ' + profile.getName());
      console.log('Given Name: ' + profile.getGivenName());
       console.log('Family Name: ' + profile.getFamilyName());
       console.log("Image URL: " + profile.getImageUrl());
       console.log("Email: " + profile.getEmail());

       // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
      console.log("ID Token: " + id_token);
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
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
/*
    FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
    });
 */  </script>
@include ('closing')
