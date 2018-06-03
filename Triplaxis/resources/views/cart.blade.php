@include ('header', ['title' => 'Shopping Cart | Triplaxis'])
@include ('navigation')
<div class="item-group">
    <div class="item-table"> 
    @php
        $form = array(
                (object) array(
                    "type"=>"checkbox",
                    "prefix"=> "NONE",
                    "Helptext" => "NONE",
                    "label" => "White Strong & Flexible"
                ),
                (object) array(
                    "type"=>"checkbox",
                    "prefix"=> "NONE",
                    "Helptext" => "NONE",
                    "label" => "Print It Anyways"
                )
            );
          $item = array(
                (object) array(
                    "modelTitle"=> "Design1",
                    "form" => $form,
                    "basePrice" => 50
                ),
                (object) array(
                    "modelTitle"=> "Design2",
                    "form" => $form,
                    "basePrice" => 20
                ),
                (object) array(
                    "modelTitle"=> "Design3",
                    "form" => $form,
                    "basePrice" => 30
                )
            );
         @endphp
     @include ('item', ['itemdata' => $item])
     </div>
    <div class="cart">
        <p>Order Summary</p>
        <div class="index">
            <p>Subtotal: </p>
            <p>RM <span id="subtotal">0.00</span></p>
        </div>
        <div class="index">
            <p>Shipping Fee: </p>
            <p>RM 10.00</p>
        </div>
        <div class="index">
            <p>Total Price: </p>
            <p>RM <span id="grandtotal">0.00</span></p>
        </div>
        <div class="index">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Promotion Code" />
            <button type="button" class="btn-btn-outline-dark"> APPLY</button>
        </div>
    </div>
</div>
<div id="bototm">
	<table>					
                        <td style="background-color:lightgrey">
                        <a href="{{ url('/') }}">
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button>
                        </a>
                        </td>
                        <td style="background-color:lightgrey">
                        <a href="{{ url('shipping') }}">
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>					
                </tbody>
            </table></div>
@include ('footer')
