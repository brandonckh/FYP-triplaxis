<form>
    @foreach ($form as $FormElement)
    <div class="material-input">
        <input type="{{ $FormElement->type }}">
        <div class="material-input-highlight"></div>
        <div class="material-input-label">
        @if ($FormElement->prefix !== "NONE")
             <p><span>{{ $FormElement->prefix }}</span>{{ $FormElement->label }}</p>
        @else
             <p>{{ $FormElement->label }}</p>
        @endif
        </div>
        @if ($FormElement->Helptext !== "NONE")
        <div class="material-input-helptext">
             <p>{{ $FormElement->Helptext }}</p>
        </div>
        @endif
    </div>
    @endforeach
</form>
