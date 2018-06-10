<div class="mobile mobile-title">
    <div class="mobile-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
<div class="mobile mobile-sidemenu" style="top:57px" >
    <div class="mobile-sidemenu-visible">
    @foreach ($navigationData as $nav)
        @if ($nav->text === "------")
            <div class="mobile-horizontal-split"></div>
        @else 
            <a href="{{ $nav->data }}">{{ $nav->text }}</a>
        @endif
    @endforeach
    </div>
</div>
    <p>Triplaxis 3D Printing Studio</p>
</div>
<button type="button" class="btn btn-primary btn-sm upload mobile"></button>

