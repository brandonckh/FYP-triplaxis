@include ('header', ['title' => 'Home | Triplaxis'] )
@include ('navigation')
 
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          @php
            $spotlightData = array(
                (object)array(
                    'count' => '0',
                    'alt' => 'British woman laughing eating salad',
                    'src' => 'photo6073448696076412911.jpg'
                ),
                (object)array(
                    'count' => '1',
                    'alt' => 'white woman laughing eating salad',
                    'src' => 'photo6073448696076412912.jpg'
                ),
                (object)array(
                    'count' => '2',
                    'alt' => 'another white woman eating salad laughing',
                    'src' => 'photo6073448696076412913.jpg'
                )
            )
          @endphp
            @foreach ($spotlightData as $slider)
                @if ($slider === reset($spotlightData))
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slider->count }}" class="active"></li>
                @else 
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slider->count }}"></li>
                @endif
            @endforeach
  		</ol>
        <div class="carousel-inner">
            @foreach ($spotlightData as $slider)
                @if ($slider === reset($spotlightData))
                    <div class="carousel-item active">
                @else
                    <div class="carousel-item">
                @endif
                    <img class="d-block w-100" src="{{ asset( 'public/img/' . $slider-> src ) }}" alt="{{ $slider->alt }}">
                </div>
            @endforeach
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
    </div>
    @php
    $productdata = array(
            (object)array(
                'text' => 'Football Model',
                'src' => '412911.jpg'
            ),
        )
    @endphp
<div class="product">
    <p>Top Product(Most Purchased)<a href="#">See All</a></p>
    <div class="product-roll">
    @foreach ($productdata as $pdata)
    <div class="card material-scroll">
        <img class="card-img-top" src="{{ asset('/public/img/'. $pdata->src) }}"></img>
        <div class="card-body">
            <p class="card-text">{{ $pdata->text }}</p>
        </div>
    </div>
    @endforeach
    </div>
    </div>
<div class="product">
    <p>Recent Product(Most Purchased)<a href="#">See All</a></p>
    <div class="product-roll">
    @foreach ($productdata as $pdata)
    <div class="card material-scroll">
        <img class="card-img-top" src="{{ asset('/public/img/'. $pdata->src) }}"></img>
        <div class="card-body">
            <p class="card-text">{{ $pdata->text }}</p>
        </div>
    </div>
    @endforeach
    </div>
    </div>
@include ('footer')
