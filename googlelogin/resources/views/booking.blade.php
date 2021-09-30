<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>book</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<a href="{{route('pdf')}}" class=" nav-link" style="text-align:right;"> Download Recipt</a>
<br>
 <div class="left-ads-display col-md-6">
                  <div class="row filter_car_view">
@foreach($book as $b)
<br>
  <div class="col-lg-6 col-md-4 product-men women_two ">
               <div class="product-toys-info">
                  <div class="men-pro-item">
                     <div class="men-thumb-item">
                        <img src="{{url('files/'.$b->file)}}" style="height: 200px;" class="img-thumbnail" alt="">
                        <!-- <div class="men-cart-pro">
                           <div class="inner-men-cart-pro">

                              <a  href="" class="link-product-add-cart">Quick View</a>

                           </div>
                        </div> -->
                        <!-- <span class="product-new-top">New</span> -->
                     </div>
                     <div class="item-info-product">
                        <div class="info-product-price">
                           <div class="grid_meta">
                              <div class="product_price">
                                 <div class="grid-price mt-2">
                                    <span class="money "> tsggit Name : {{$b->t_name}}</span>
                                 </div>
                                 <div class="grid-price mt-2">
                                    <span class="money "> rshirt Price : ${{$b->price}}</span>
                                 </div>
                                 <div class="grid-price mt-2">
                                    <span class="money ">YOur Name : {{$b->firstname}}</span>
                                 </div>
                                 <div class="grid-price mt-2">
                                    <span class="money ">YOur Email : {{$b->email}}</span>
                                 </div>
                                 <div class="grid-price mt-2">
                                    <span class="money ">Payment_Id : {{$b->payment_id}}</span>
                                 </div>
                                 
                              </div>

                           </div>
                           
                     </div>
               </div>
            </div>
        </div>

    </div>

@endforeach

</div>
</div>
</body>
</html>
