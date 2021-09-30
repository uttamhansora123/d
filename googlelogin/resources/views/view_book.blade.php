<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        
    </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">name</th>
                    <th scope="col">Tshirt Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment Id</th>
                    <th scope="col">Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pdf  as $v)
                <tr>
                    <th >{{ $v->firstname }}</th>
                    <td>{{ $v->t_name }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->price }}</td>
                    <td>{{ $v->payment_id }}</td>
                    <td><img src="{{'files/'.($v->file)}}" style="height: 50px;width: 50px;"></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>
  
<!--  -->