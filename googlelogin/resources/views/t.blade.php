    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>THird Prty</title>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
    <form action="#" method="post" enctype="multipart/form-data">
    	@csrf

    	<div class="container mt-3">
    	<!-- <div class="d-flex"> -->

    		<div class="justify-content-center">
          <div class="mx-auto" style="width: 500px;">
      
      <div class="form-group" style="margin-top:150px;">
       
      	<h1 style="text-align:center;">Add Product</h1>
       
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">ENter Tshirt Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="t_name" value="" aria-describedby="emailHelp" placeholder="Enter Name">
        @error('t_name')
    
    <label style="color:red;">{{ $message }}</label>
    @enderror
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Enter Price</label>
       <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter Price">
    </div>
    @error('price')
    
    <label style="color:red;">{{ $message }}</label>
    @enderror
    <br>
    <div class="form-group">
        <label for="exampleInputEmail1">ENter Color</label>
       <input type="text" class="form-control" name="color" id="exampleInputPassword1" placeholder="Enter Color">
    </div>
    @error('color')
    
    <label style="color:red;">{{ $message }}</label>
    @enderror
    <br>
       <div class="form-group">
        <label for="exampleInputEmail1">enter size</label>
       <input type="text" class="form-control" name="size" id="exampleInputPassword1" placeholder="Enter Size">
    </div>
    <br>
     <div class="form-group">
        <label for="exampleInputEmail1">choose tshirt photo</label>
       <input type="file" class="form-control" name="file" id="profile-img" >
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
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage Leaderboard -->
<ins class="adsbygoogle"
style="display:inline-block;width:728px;height:90px"
data-ad-client="ca-pub-1234567890123456"
data-ad-slot="1234567890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>