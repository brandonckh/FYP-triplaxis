@include ('header', ['title' => 'Upload Reminder | reminder'])

<!-- **************FOR POP UP ONLY************** -->


<div class="jumbotron"> 
  <h1 class="display-4">Reminder!</h1>
  <p class="lead">This is a simple reminder of basic rules & regulations of uploading files to our system. Products that are illegal, dangerous, contains sexual content and that has breached the copyrights  of other users will not be approved where the user's account might be banned.</p>
  <hr class="my-4">
  <p>For more information, please click on the <a href="{{ url('tos') }}">Terms &  Conditions page.</a>Click on the continue button to continue uploading products to sell.</p>
  <a class="btn btn-primary btn-lg" href="{{ url('upload-prod') }}" role="button">Continue...</a>
</div>
