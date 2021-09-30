    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>Student Form</title>
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
       
      	<h1 style="text-align:center;">Add Student Data</h1>
       
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="" aria-describedby="emailHelp" placeholder="Enter Name">
        @error('name')
    
    <label style="color:red;">{{ $message }}</label>
    @enderror
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
       <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter Email">
    </div>
    @error('name')
    
    <label style="color:red;">{{ $message }}</label>
    @enderror
    <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
       <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Enter Contact No">
    </div>
    @error('subject')
    
    <label style="color:red;">{{ $message }}</label>
    @enderror
    <br>
       <div class="form-group">
        <label for="exampleInputEmail1">Select Date</label>
       <input type="date" class="form-control" name="dob" id="exampleInputPassword1" placeholder="Enter DOB">
    </div> 
    <br>
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
     

      
      <br>
      </div>
     </div>

      </div>
      </div>
    </form>
    </body>
    </html>