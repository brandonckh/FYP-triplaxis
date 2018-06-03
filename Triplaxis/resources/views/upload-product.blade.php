@include ('header', ['title' => 'Upload Product | Triplaxis'])
@include ('navigation')
<h1>Upload & Sell Your Design Now</h1>
	
	<div>
		<medium id="sellingdesignlable" class="text-muted">Start making money by selling your design now!</medium>
	</div>
<br>
	<div>
    	<img src="business.jpg" class="img-fluid" alt="Responsive image">
	</div>
<br>
    
    <div>
    	<h2><span class="badge badge-primary">Step 1:</span> Enter Product Name </h2>
    	<form>
    		<input class="form-control" type="text" placeholder="Enter product name...">
    	</form>

    	<h2><span class="badge badge-primary">Step 2:</span> Enter Selling Price </h2>
    	<form>
    		<div class="col-md-4 mb-3">
      			<label for="validationDefaultUsername">Design's Selling Price</label>
      			<div class="input-group">
        
        			<div class="input-group-prepend">
          				<span class="input-group-text" id="inputGroupPrepend2">MYR</span>
        			</div>
        		<input type="number" class="form-control" id="designprice" placeholder="Enter price here..." aria-describedby="inputGroupPrepend2" required>
      			</div>
    		</div>
    	</form>

    	<h2><span class="badge badge-primary">Step 3:</span> Select Product Category </h2>
    	<select class="form-control">
  			<option>Select Category...</option>
		</select>
		<br>

    	<h2><span class="badge badge-primary">Step 4:</span> Enter Product Description </h2>
    	<form>
    		<div class="form-group">
    			<label for="productdescription">Enter product description. (Eg. Dimention 10 X 5 x 3) 
    			</label>
    			<textarea class="form-control" id="productdescription" rows="3">Enter description here...</textarea>
  			</div>
    	</form>

    	<h2><span class="badge badge-primary">Step 5:</span> Upload Image(s) of Product </h2>
    	<form>
  			<div class="form-group">
    			<label for="uploaddesignimage">Upload Design's Image</label> 
    			<medium id="sellingdesignlable" class="text-muted">(.jpeg or .png only)</medium>
    			<input type="file" class="form-control-file" id="exampleFormControlFile1">
 			</div>
		</form>

    	<h2><span class="badge badge-primary">Step 6:</span> Upload Design File </h2>
    	<form>
  			<div class="form-group">
    			<label for="uploaddesignfile">Upload Design File</label>
    			<medium id="sellingdesignlable" class="text-muted">(.obj or .stl only)</medium>
    			<input type="file" class="form-control-file" id="exampleFormControlFile1">
 			</div>
		</form>
		<div>
			<button type="button" class="btn btn-success">Upload!</button>
		</div>

    </div>
@include ('footer')
