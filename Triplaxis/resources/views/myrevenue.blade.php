@include ('header', ['title' => 'My Revenue | Triplaxis'])
@include ('navigation')
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>My Revenue:</h1>
<br>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="file id / product name" aria-label="Search">
    		<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    	</form><br>
	<div class="row">
		<div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Full Name</th>
			<th>File Type</th>
            <th>Email</th>
            <th>Purchased Date</th>
            <th>Price</th>
            <th>Quatity (Sold Out)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img class="mr-3" src="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\model002.jpg" style="width: 420px; height: 220px;">
			<a href="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\model002.jpg" target="_blank">Chess design</a></td>
            <td> Steven Tan</td>
			<td> img.obj 	</td>
            <td>steven24@gmail.com</td>
            <td>14/10/2017</td>
            <td>RM100.00</td>
            <td><p class="text-primary">1</p></td>
          </tr>
          <tr>
            <td>2</td>
            <td><img class="mr-3" src="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\model004.jpg" style="width: 420px; height: 220px;">
			<a href="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\model004.jpg" target="_blank">Model 004</td>
            <td>Lim Soon Keit</td>
			<td> img.stl 	</td>
            <td>soonkeit@hotmail.com</td>
            <td>3/11/2017</td>
            <td>RM80.00</td>
            <td><p class="text-primary">3</p></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img class="mr-3" src="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\tankmodel.jpg" style="width: 420px; height: 220px;">
			<a href="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\tankmodel.jpg" target="_blank">Tank Model</a></td>
            <td>Siew Ming Ming</td>
			<td> img.stl 	</td>
            <td>Ming993@outlook.com</td>
            <td>19/4/2018</td>
            <td>RM150.00</td>
            <td><p class="text-primary">7</p></td>
          </tr>
          <tr>
            <td>4</td>
            <td><img class="mr-3" src="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\model003.jpg" style="width: 420px; height: 220px;">
			<a href="C:\Users\Acer MY\Documents\GitHub\FYP-triplaxis\Triplaxis\public\img\model003.jpg" target="_blank">Model 003</a></td>
            <td>Mark Timoti</td>
			<td> img.obj 	</td>
            <td>Ttt15@gmail.com</td>
            <td>11/6/2018</td>
            <td>RM80.00</td>
            <td><p class="text-primary">10</p></td>
          </tr>
		   <tr>
            <td>	</td>
            <td>	</td>
			<td>	</td>
			<td> 	</td>
            <td>	</td>
            <td><h3><p class="text-danger">Total Revenue:</p></h3></td>
            <td><h3><p class="text-danger">RM410.00</p></h3></td>
			<td>	</td>
		  </tr>
		    <td>	</td>
            <td>	</td>
			<td>	</td>
			<td> 	</td>
            <td>	</td>
            <td><h3><p class="text-danger">Cash Available:</p></h3></td><!--Cash Avaible = The withdrawal - Total revenue. Each time withdraw the amount will deduct the current total revenue-->
            <td><h3><p class="text-danger">RM410.00</p></h3></td>
			<td>	</td>
		  </tr>
        </tbody>
      </table>
    </div>
	</div>
  <p>Please click on the <a href="revenuefromuploads.html">Terms &  Conditions page </a>before proceed to withdraw page.</p>
  <p>Please click <a href="WithdrawalHistory.html">HERE </a>to track your withdrawal history.</p>
  <button type="button" class="btn btn-primary">Submit for cash out</button>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html> 	
@include ('footer')