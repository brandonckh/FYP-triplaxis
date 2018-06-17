@include ('header', ['title'=> 'Print Your Own Design | Triplaxis'])
@include ('navigation')
    <div class="container">
      <h1>Print Your Own Design</h1>
      <div class="media">
        <img class="align-self-start mr-3" src="" alt="Generic placeholder image" width="750px" height="600px">
        <div class="position-absolute" style="margin:16em">
          <button type="button" class="btn btn-primary">Upload your 3D file</button>
        </div>
        <div class="media-body">

          <h5 class="mt-0">Resolution</h5>
          <div class="input-group mb-3">
              <div class="col-md-2">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="resolutionButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Resolution</button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" onmouseup="checkRes(this);document.getElementById('resolutionButton').innerText = this.innerText" href="#" value="300">Low (300 Microns)</a>
                    <a class="dropdown-item" onmouseup="checkRes(this);document.getElementById('resolutionButton').innerText = this.innerText" href="#" value="200">Medium (200 Microns)</a>
                    <a class="dropdown-item" onmouseup="checkRes(this);document" href="#" value="100">High (100 Microns)</a>
                  </div>
                </div>
              </div>
          </div>


          <h5 class="mt-0">Colors</h5>
          <div class="input-group mb-3">
              <div class="col">
                <h6>Solid Colors</h6>
		@include ('fillament', ['color' => [ 'white.png', 'grey.png',  'black.png', 'skin.png' ]])
		@include ('fillament', ['color' => [ 'lightblue.png','blue.png',  'yellow.png', 'candypink.png' ]])
		@include ('fillament', ['color' => [ 'pink.png', 'lightgreen1.png',  'orange.png', 'brown1.png' ]])
                <div>
                <h6 style="margin-top:1em;">Translucent Colors</h6>
		@include ('fillament', ['color' => [ 'clear.png', 'red.png',  'gold.png', 'purple.png' ]])
		@include ('fillament', ['color' => [ 'blue1.png', 'green.png',  'lightgreen2.png', 'yellow1.png' ]])
		<h6 class="hide-for-200" style="margin-top:1em;">Special Material</h6>
		<div class="hide-for-200">
		@include ('fillament', ['color' => [ 'PLAwood.png', 'PLAflex.png',  'PLAglow.png' ]])</div>
                </div></div>
	</div>
          <h5 class="mt-0" style="margin-top:1em;">Quantity</h5>
          <div class="input-group mb-3">
            <div style="display: flex">
              <button id="minus" class="btn btn-outline-secondary" type="button">-</button>
              <input style=" width:3em" value="1" disabled id="number" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
              <button id="plus" class="btn btn-outline-secondary" type="button">+</button>
            </div>
          </div>

          <h5 id="pyod_price" class="mt-0">Price (MYR)</a>
          <div class="input-group mb-3">
            <div class="">
              <input id="price" disabled type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
          </div>
        <button type="button" class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
</div>
</div>
</div>
<script>
function checkRes(doc) {
	document.getElementById("resolutionButton").innerText = doc.innerText;
	
	let counthidden = document.getElementsByClassName("hide-for-200").length;
	if(doc.innerText !== "Medium (200 Microns)") {
		for (let i = 0; i < counthidden; i++){
			document.getElementsByClassName("hide-for-200")[i].style.display = "none";
		}
	} else {
		for (let i = 0; i < counthidden; i++){
			document.getElementsByClassName("hide-for-200")[i].style.display = "";
		}
	}
}
      document.getElementById("minus").addEventListener("click", function()
      {	
	if (document.getElementById("number").value > 2) {
		document.getElementById("number").value--;
	} else {
		document.getElementById("number").value = 1;
	}
      })
      document.getElementById("plus").addEventListener("click", function()
      {
        document.getElementById("number").value++;
      })
    </script>
@include ('footer')
