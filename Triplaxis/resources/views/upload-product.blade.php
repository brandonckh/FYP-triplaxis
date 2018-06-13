@include ('header', ['title' => 'Product | Triplaxis.com'])
@include ('navigation')	
	<div class="container">
        <h1>Upload & Sell Your Design Now</h1>
		<medium id="sellingdesignlable" class="text-muted">Start making money by selling your design now!</medium>

        <div class="media">
        <img class="align-self-start mr-3" src="" alt="Generic placeholder image" width="750px" height="600px">
        <div class="position-absolute" style="margin:16em">
          <button type="button" class="btn btn-primary">Upload your 3D file</button>
        </div>

        <div class="media-body">
        <h5 class="mt-0">Enter Product Name </h5>
        <form>
            <input class="form-control" type="text" placeholder="">
        </form>

        <h5 class="mt-0">Enter Selling Price </h5>
        <form>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">MYR</span>
                    </div>
                    <input type="number" class="form-control" id="designprice" placeholder="" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </form>

        <h5 class="mt-0">Select Product Category</h5>
        <select class="form-control">
            <option>Select Category...</option>
        </select>

        <h5 class="mt-0"> Enter Product Description </h5>
        <form>
            <div class="form-group">
                <textarea class="form-control" id="productdescription" rows="3">Enter description here...</textarea>
            </div>
        </form>

        <h5 class="mt-0"> Upload Image(s) of Product </h5>
        <form>
            <div class="form-group">
                <label for="uploaddesignimage">Upload Design's Image</label> 
                <medium id="sellingdesignlable" class="text-muted">(.jpeg or .png only)</medium>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>

        <h5 class="mt-0"> Upload Design File </h5>
        <form>
            <div class="form-group">
                <label for="uploaddesignfile">Upload Design File</label>
                <medium id="sellingdesignlable" class="text-muted">(.obj or .stl only)</medium>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
            <button type="button" class="btn btn-primary">Upload</button>
        </div>
        </div>
    </div>
@include ('footer')
