@include ('header', ['title' => 'logged out | Triplaxis'])    
@include ('navigation')
<h1>You have successfully logged out!</h1>
	<div class="alert alert-primary" role="alert">
	Please <a href="{{ url('/') }}" class="alert-link">click here</a> to proceed back home page.
    </div>
@include ('footer')
