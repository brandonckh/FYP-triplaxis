@include ('header', ['title' => 'Shopping Cart | Triplaxis'])
@include ('navigation')
<div class="item-group">
    <div class="item-table" id="template-target">
		<p id="no-item">No Items in cart</p>
			<div class="item" style="width: 48em">
			<div class="TEMPLATE" id="TEMPLATE" style="display:none" >
			<div class="item" >
			    <div class="item-image" style="background-color: #004499"></div>
				<div class="item-index">
				    <div class="item-nostyle">
					<a href="#">
					  <div id="tmp-title" class="title"></div>
					</a>
				    </div>
				</div>
				<div class="item-input">
				   <p class="btn btn-outline-secondary decrement" style="transform: translate(-99%, 186%)">-</p> 
				    <input type="text" class="form-control quantity" value="1">   
				   <p class="btn btn-outline-secondary increment" style="transform: translate(136%, -186%)">+</p> 
				</div>
				<div class="item-price">
				    <p>RM <span class="basePrice" id="tmp-baseprice"></span></p>
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
			</div></div>
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
        <!--div class="index">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Promotion Code" />
            <button type="button" class="btn-btn-outline-dark"> APPLY</button>
        </div-->
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
