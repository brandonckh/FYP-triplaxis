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
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Resolution</button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Low (300 Microns)</a>
                    <a class="dropdown-item" href="#">Medium (200 Microns)</a>
                    <a class="dropdown-item" href="#">High (100 Microns)</a>
                  </div>
                </div>
              </div>
          </div>

          <h5 class="mt-0">Material</h5>
          <div class="input-group mb-3">
              <div class="col">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Material</button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">PLA Wood</a>
                    <a class="dropdown-item" href="#">PLA Flex</a>
                    <a class="dropdown-item" href="#">PLA Glow in the Dark</a>
                  </div>
                </div>
              </div>
          </div>

          <h5 class="mt-0">Colors</h5>
          <div class="input-group mb-3">
              <div class="col">
                <h6>Solid Colors</h6>
                <div class="row">
                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>
                </div>

                <div class="row">
                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>
                </div>

                <div class="row">
                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>
                </div>

                <div>
                <h6>Translucent Colors</h6>
                <div class="row">
                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>
                </div>

                <div class="row">
                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>

                  <div>
                    <a href="">
                      <img src="" class="" width="50" height="50" alt="">
                    </a>
                  </div>
                </div>
                </div>

          <h5 class="mt-0">Quantity</h5>
          <div class="input-group mb-3">
            <div>
              <button id="minus" class="btn btn-outline-secondary" type="button">-</button>
              <input id="number" type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
              <button id="plus" class="btn btn-outline-secondary" type="button">+</button>
            </div>
          </div>

          <h5 id="pyod_price" class="mt-0">Price</a>
          <div class="input-group mb-3">
            <div class="">
              <input id="number" type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
          </div>
        <button type="button" class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
</div>
</div>
</div>
    <script>
      document.getElementById("minus").addEventListener("click", function()
      {
        document.getElementById("number").value--;
      })
      document.getElementById("plus").addEventListener("click", function()
      {
        document.getElementById("number").value++;
      })
    </script>
@include ('footer')
