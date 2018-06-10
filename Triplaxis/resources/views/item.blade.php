@foreach ($item as $data)
<div class="item">
    <div class="item-image" style="background-color: #004499"></div>
        <div class="item-index">
            <div class="item-nostyle">
                <a href="#">
                  <div class="title">{{ $data->modelTitle }}</div>
                </a>
                @include ('form', ['form' => $data->form])
            </div>
        </div>
        <div class="item-input">
           <p class="btn btn-outline-secondary decrement" style="transform: translate(-99%, 186%)">--</p> 
            <input type="text" class="form-control quantity" value="1">   
           <p class="btn btn-outline-secondary increment" style="transform: translate(136%, -186%)">+</p> 
        </div>
        <div class="item-price">
            <p>RM <span class="basePrice">{{ $data->basePrice }}</span></p>
        </div>
        <div class="item-price">
            <p>RM <span class="itemTotal"></span></p>
        </div>
        <div class="item-price">
            <div class="item-nostyle">
                <button type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span> Remove
                </button>
            </div>
        </div>
    </div>
@endforeach
