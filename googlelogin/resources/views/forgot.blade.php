<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<form action="#" method="post">
	@csrf

	<div class="container mt-3">
	<!-- <div class="d-flex"> -->

		<div class="justify-content-center">
      <div class="mx-auto" style="width: 500px;">
  
  <div class="form-group" style="margin-top:150px;">
  <!-- @if(Session::has('s'))
        <p class="alert alert-success">{{ Session::get('s') }}</p>

        @endif -->
  	<h1 style="text-align:center;">Forgot Password</h1>
   
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp" placeholder="Enter Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <br>
  
  <button type="submit" name="sendmail" value="sendmail" class="btn btn-primary">Forgot Password</button>

  <br>
  </div>
 </div>

  </div>
  </div>
</form>
</body>
</html>
