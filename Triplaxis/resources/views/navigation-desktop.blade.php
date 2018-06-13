<nav class="navbar fill navbar-light desktop d-print-inline-block" style="position: fixed; width: 100%; z-index: 10">
    <a class="navbar-brand" href="{{ url('/') }}" style="height: 76px; background-color:#fff">
        <img src="{{ asset('/public/img/comp-logo.jpeg') }}" width="70" height="70"  alt="">
    </a>
    <form class="form-inline justify-content-end" style="margin:0">
        <input style="min-width: 30em" class="form-control mr-sm-8" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        <nav class="navbar navbar-expand-lg navbar-light desktop">
            <a href="{{ url('submission-sell') }}">
            <button type="button" style="margin-right: 1em" class="nav-link btn btn-primary btn-sm upload">Sell</button></a>
            <!-- a href="{{ url('submission-print') }}" --><a><button type="button" class="nav-link btn btn-primary btn-sm upload">Print</button></a>
            @foreach ($navigationData as $nav)
                @if ($nav->text === "------")
                    <div class="vertical-divider phone-nav-button"></div>
                @else
                    <a class="nav-item nav-link phone-nav-button" href="{{ $nav->data }}">{{ $nav->text }}</a>
                @endif
            @endforeach
        </nav>
        <div class="push-down" >
             <a  href="{{ url('Login')}}"><p>Login</p></a>
             <a  href="{{ url('cart') }}"><p><i style="padding-left:1em"class="material-icons">shopping_cart</i></a>
             <div class="item-count"></div>
        </div>
    </form>
</nav>
<div style="height: 75px"></div>
