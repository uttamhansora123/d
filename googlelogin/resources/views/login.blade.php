<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
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

  	<h1 style="text-align:center;">Log In</h1>
   
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
   <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="enter Password">
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    
<br>
  <button type="submit" name="login" value="login" class="btn btn-primary">Log In</button>
  

  
  <br>
  </div>
 </div>

  </div>
  </div>
</form>
</body>
</html>