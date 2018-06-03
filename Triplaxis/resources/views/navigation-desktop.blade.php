<nav class="navbar navbar-light desktop d-print-inline-block">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('/img/comp-logo.jpeg') }}" width="70" height="70"  alt="">
    </a>
    <a class="nav-item nav-link" href="{{url('profile')}}">WELCOME USER <!--SEARCH BAR PUT IT LONG--></a>

    <form class="form-inline justify-content-end">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         <a class="navbar-brand" href="{{ url('Login')}}">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="Login">
        </a>
         <a class="navbar-brand" href="{{ url('sign-up') }}">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="Sign-up">
        </a>
         <a class="navbar-brand" href="{{ url('cart') }}">
           <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="cart">
        </a>
    </form>
</nav>
<hr class="desktop">
<nav class="navbar navbar-expand-lg navbar-light desktop">
    <a href="{{ url('submission') }}"><button type="button" class="btn btn-primary btn-sm upload"></button></a>
    @foreach ($navigationData as $nav)
        @if ($nav->text === "------")
            <div class="vertical-divider phone-nav-button"></div>
        @else
            <a class="nav-item nav-link phone-nav-button" href="{{ $nav->data }}">{{ $nav->text }}</a>
        @endif
    @endforeach
</nav>
<hr class="desktop">
<!-- TODO: Make it a hamburger list
<div>
<a class="justify-content-end">
  <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
  <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
  <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
</a>

</div>
-->
