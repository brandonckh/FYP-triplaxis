@include ('header', ['title' => $Type . " Login | Triplaxis" ])

  <div class="boxed">
    <div class="min-form-width">
        <h2>{{ $Type }} Login</h2>
        <form >
          <div class="form-group col-8">
            <label for="exampleInputEmail1">{{ $Type }} ID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter {{ $Type }} ID">
            <small id="emailHelp" class="form-text text-muted">Please enter {{ $Type }} ID</small>
          </div>
          <div class="form-group col-8">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Please enter {{ $Type }} password</small>
          </div>

          <div class="">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>
    </div>
    <img alt="Triplaxis Sdn. Bhd." src="{{ asset('/img/comp-logo.jpeg') }}" />
  
  </div>
@include ('closing')
