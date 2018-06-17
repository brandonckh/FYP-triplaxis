<nav class="navbar fill navbar-light desktop d-print-inline-block" style="position: fixed; width: 100%; z-index: 10">
    <a class="navbar-brand" href="{{ url('/') }}" style="height: 76px; background-color:#fff">
        <img src="{{ asset('/public/img/comp-logo.jpeg') }}" width="70" height="70"  alt="">
    </a>
    <form class="form-inline justify-content-end" style="margin:0">
        <input style="min-width: 30em" class="form-control mr-sm-8" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        <nav class="navbar navbar-expand-lg navbar-light desktop">
	@if (session()->has('nick'))
            <a href="{{ url('submission-sell') }}">
	@else 
            <a href="{{ url('Login') }}">
	@endif
            <button type="button" style="margin-right: 1em" class="nav-link btn btn-primary btn-sm upload">Upload</button></a>
            <a href="{{ url('print-your-own-design') }}" ><button type="button" class="nav-link btn btn-primary btn-sm upload">Print</button></a>
            @foreach ($navigationData as $nav)
                @if ($nav->text === "------")
                    <div class="vertical-divider phone-nav-button"></div>
		    @else
			@if ($nav->loginrequired !== "TRUE" || session()->has('nick'))
			    <div onmouseup="toggle(this.getElementsByClassName('login-menu')[0])">
		    <a class="nav-item nav-link phone-nav-button" href="{{ $nav->data }}">{{ $nav->text }}</a>
				@if ($nav->hasSubCatalog === "TRUE")
					@include ('dropdown-menu', ['index' => $nav->subCatalog])
				@endif
				</div>
			@else
			    <div>
                    <a class="nav-item nav-link phone-nav-button" href="{{ url('Login') }}">{{ $nav->text }}</a></div>
		    @endif
		    </div>

		@endif
            @endforeach
        </nav>
        <div class="push-down" >
	@if (session()->has('nick'))
		@php 
		$data = array(
			(object) array(
			'type'=>'text',
			'text' => 'Product'
			),
			(object) array(
			'type'=>'url',
			'url' => url('logout'),
			'text' => 'Logout'
			)
		);
			
			
    @endphp
	<div onmouseup="toggle(this.getElementsByClassName('login-menu')[0])">
		<a href="#"><p>{{ session('nick')}} </p></a>
		@include ('dropdown-menu', ['index' => $data])
	@else
             <a  href="{{ url('Login')}}"><p>Login</p></a>

	     @endif
	     </div>
             <a  href="{{ url('cart') }}"><p><i style="padding-left:1em"class="material-icons">shopping_cart</i></a>
             <div class="item-count"></div>
        </div>
    </form>
</nav>
<div style="height: 75px"></div>
