<div id="menu" class="login-menu appear">
	<div class="login-menu-pointing"></div>
@foreach ($index as $data)
	<div class="highlight">
	@switch ($data->type)
		@case ('url')
			<a href= "{{ $data->url }}" class="highlight" style="color:#000;" >{{ $data->text }}</a>
		@break 
		@case ('text')
			<p class="highlight">{{ $data->text }}</p>
		@break
	@endswitch
	</div>
@endforeach	
</div>
