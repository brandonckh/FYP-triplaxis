@include ('header', ['title' => 'Browsing: '. $category .' | Triplaxis'])      
@include ('navigation')
<h1>Browsing {{ $category }}</h1>
      @php
	$i = 3;
	$setting = "TRUE";
      @endphp
 @foreach ($data as $result)
 @php
 $i++;
$setting = "FALSE";
@endphp
      
@if ($i%4 == 0)	
      <div class="row">
   @endif
        <a href="{{ url('product?id=' . $result->design_id) }}">
          <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="" alt="" style="width: 270px; height: 200px;">
          <div class="card-body">
            <h6>{{ $result->design_name }}</h6>
            <p class="card-text text-justify">{{ $result->description }}</p>
            <p class="card-text" align="right">RM{{$result->price}}</p>
          </div>
        </div>
	</a> 
   @if ($i%4 == 0)
      </div> 
   @endif
   @endforeach
@if ($setting === "TRUE")
	<p>No results found</p>
	<div style="height: 10em"></div>
@endif
@include ('footer')
