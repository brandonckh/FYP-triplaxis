@include ('header', ['title' => '$User\'s Profile | TripLAxis'])
@include ('navigation')

  <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">User Profile</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img class="media-object" src="https://www.kodefork.com/static/users/images/user.png" style="width: 120px; height: 120px;"></div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
						<tr>
                        <td>Username:</td>
                        <td>David Tan Chee Seng</td>
                      </tr>
                      <tr>
                        <td>E-mail Address:</td>
                        <td><a href="mailto:abc@hotmail.com">abc@hotmail.com</a></td>
                      </tr>
                      <tr>
                        <td>Mobile Number:</td>
                        <td>012-3456789</td>
                      </tr>                  
                        <tr>
                        <td>Home Address:</td>
                        <td>14, 46200 Petaling Jaya, Selangor.</td>
                      </tr>
                        <td>User Details:</td>
                        <td>Selling Stainless steel & Metal materials for 3D Printing</td>
                      </tr>
	
						<tr>
						<td><a href="#" class="btn btn-primary">Edit Profile</a></td>
						<td><a href="#" class="btn btn-primary">Uploaded products</a></td>
						<td><a href="#" class="btn btn-primary">Track Order Status</a></td>
						</tr>
						<tr>
						<td>					  </td>
						<td><h1>Uploaded Products</h1></td>
						</tr>
						<tr>
						<td><div class="col-md-3 col-lg-3 " align="center"> <img class="media-object" src="http://3dchimera.com/files/2014/08/3d-printed-monochrome-model.png" style="width: 220px; height: 220px;"></div>
						<td><div class="col-md-3 col-lg-3 " align="center"> <img class="media-object" src="http://blog.layertrove.com/wp-content/uploads/2016/07/3D-Printing-Ideas-3D-Printer-Projects-AT-AT-Walker.jpg" style="width: 220px; height: 220px;"></div>
						<td><div class="col-md-3 col-lg-3 " align="center"> <img class="media-object" src="https://assets.pinshape.com/uploads/image/file/62036/superhero-keychains-3d-printing-62036.jpg" style="width: 220px; height: 220px;"></div>												
						</tr>
						<tr>
						<td><button type="button" class="btn btn-primary btn-sm">Edit product</button></td>
						<td><button type="button" class="btn btn-secondary btn-sm">Delete Product</button></td>
						</tr>	
				 </tbody>
                  </table> 
				</div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
@include ('footer')
