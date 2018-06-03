        @foreach ($topic as $item)
          <div class="col order-first">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">  {{ $item->title }}</h5>
                <p class="card-text">{{ $item->description }}</p>
                <a href="{{ $item->url }}" class="btn btn-primary">Find out more</a>
              </div>
            </div>
          </div>
         @endforeach
