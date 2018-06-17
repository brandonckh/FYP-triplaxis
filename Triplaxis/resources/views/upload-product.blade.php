@include ('header', ['title' => 'Product | Triplaxis.com'])
@include ('navigation')	
	<div class="container">
        <h1>Upload Your Design Now</h1>
		<medium id="sellingdesignlable" class="text-muted">Start making money by selling your design now!</medium>

	<div class="media">
<div id="view" style="margin-right:1em"></div>

        <div class="media-body">
        <h5 class="mt-0">Enter Product Name </h5>
        <form method="POST" action="new-product">
            <input class="form-control" type="text" name="name" placeholder="">

        <h5 class="mt-0">Enter Selling Price </h5>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">MYR</span>
                    </div>
                    <input type="number" class="form-control" name="price" id="designprice" placeholder="" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
	
        <h5 class="mt-0">Select Product Category</h5>
        <select name="category" class="form-control">
            <option>Select Category...</option>
            <option>Accessories</option>
            <option>Cases</option>
            <option>Figurines</option>
            <option>Hobbies</option>
            <option>Jewellery</option>
            <option>Keychain</option>
            <option>Toys</option>
            <option>Others</option>
        </select>

        <h5 class="mt-0"> Enter Product Description </h5>
            <div class="form-group">
                <textarea class="form-control" name="description" id="productdescription" rows="3" placeholder="Enter description here..."></textarea>
            </div>

        <h5 class="mt-0"> Upload Image(s) of Product </h5>
            <div class="form-group">
                <label for="uploaddesignimage">Upload Design's Image</label> 
                <medium id="sellingdesignlable" class="text-muted">(.jpeg or .png only)</medium>
                <input multiple type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>

        <h5 class="mt-0"> Upload Design File </h5>
            <div class="form-group">
                <label for="uploaddesignfile">Upload Design File</label>
                <medium id="sellingdesignlable" class="text-muted">(.obj or .stl only)</medium>
                <input type="file" name="model" class="form-control-file" id="file">
	    </div>
		{{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        </div>
        </div>
    </div>
@include ('footer')
