<div class="row">
@foreach ($color as $RGB)
	<a class="selection-data-nodes" name="{{ $RGB }}" onmouseup="useFillament(this)" >
		<div class="fillament"></div>
		<img src="{{ asset('/public/img/' . $RGB) }}" width="50" height="50" alt="">
	</a>
@endforeach
</div>
