<!DOCTYPE html>
   <html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
   
   </body>
   </html>


   <?php
        use Illuminate\Support\facades\Session;
        $s=Session::get('client');
     ?>

      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                          <img src="{{url('files/'.$to[0]->file)}}" style="height: 300px;" class="img-thumbnail img-fluid" alt="">
                       <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                         
                                       <div class="product_price">
                                          <h4>
                                             <tr style="text-align: right;">
                                                <td>Tshirt name:-</td>
                                           <td>  <a href="">{{$to[0]->t_name}}</a></td>
                                          </tr>
                                          </h4>
                                           <h5>
                                             <tr>
                                                <td>Tshirt color:-</td>
                                           <td>  <a href="">{{$to[0]->color}}</a></td>
                                          </tr>
                                          </h5>
                                          <div class="grid-price mt-2">
                                            <tr>
                                                <td>Tshirt price:-</td>
                                           <td>  <a href="">${{$to[0]->price}}</a></td>
                                          </tr>

                                          </div>
                                       
                                </td>
                                       </div>
                                      
                                       <div class="grid-price mt-2">
                                               <tr>
                                                <td>Tshirt Size:-</td>
                                           <td>  <a href="">{{$to[0]->size}}</a></td>
                                           &nbsp;
                                           <td><button class="btn btn-info" name="book" value="book" id="book">Buy</button></td>
                                           <input type="hidden" name="tshirt_id" id="tshirt_id" value="{{$to[0]->id}}">
                                           <input type="hidden" id="user_id" name="user_id" value="{{$s->id}}">
                                           <input type="hidden" id="price" name="price" value="{{$to[0]->price}}">
                                          </tr>
                                          
                            
                                        </div>
                                    </div>
               <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
               <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
               <script type="text/javascript">
                  $(document).on('click','#book',function(){
            
                     var user_id=$('#user_id').val();
                     var tshirt_id=$('#tshirt_id').val();
                     var price=$('#price').val();

                     var options={
                        "key":'rzp_test_TOrSMpyTOZQu5G',
                        "amount":(price*100),

                      "handler":function(res){

                  var razorpay_payment_id  = res.razorpay_payment_id;
                  console.log(res);
                  $.ajax({
                     url:"{{route('pay')}}",
                     data:{book:1,price:price,payment_id:razorpay_payment_id,user_id:user_id,tshirt_id:tshirt_id},
                     type:"GET",
                     dataType:"json",
                     
                     success:function(res){


                        if(res.status == 'true'){

                           Swal.fire({
                              position: 'text-center',
                              icon: 'success',
                              title: 'Payment Successfull....',
                              showConfirmButton: false,
                              timer: 5000
                           });
                           setTimeout(function () {
                              window.location.href = "{{route('home')}}";
                           }, 5000);

                        }
                     }

                  });

               } 
                   }
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
             
                  });
               </script>