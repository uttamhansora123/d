   <?php
        use Illuminate\Support\facades\Session;
        $s=Session::get('client');
     ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title></title>
   <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/jquery.jqZoom.css" />
 </head>
 <body>
   @if(Session::has('client'))
   <a class="nav-link "  style="text-align: right;">HELLO! {{$s->firstname}}</a>
  <a class="nav-link " href="{{route('logout')}}" style="text-align: right;">Log Out</a>
 <a href="{{route('booking')}}" class="nav-link" style="text-align:right;">  booking</a>
                      

 @else
 @endif
 <div class="left-ads-display col-md-6">
                  <div class="row filter_car_view">
                      @foreach($to as $t)

                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two ">
                       
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 
                                 <img src="{{url('files/'.$t->file)}}"  style="height: 200px;" class="img-thumbnail img-fluid " alt="">
                              
                                 <div class="men-cart-pro">
                                 
                                 </div>
                                 
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                          <a  class="link-product-add-cart" href="{{route('product',$t->id)}}">Quick View</a>
                                       <div class="product_price">
                                          <h4>
                                             <tr>
                                                <td>Tshirt name:-</td>
                                           <td>  <a>{{$t->t_name}}</a></td>
                                          </tr>
                                          </h4>
                                           <h5>
                                             <tr>
                                                <td>Tshirt color:-</td>
                                           <td>  <a >{{$t->color}}</a></td>
                                          </tr>
                                          </h5>
                                          <div class="grid-price mt-2">
                                            <tr>
                                                <td>Tshirt price:-</td>
                                           <td>  <a >${{$t->price}}</a></td>
                                          </tr>

                                          </div>
                                       </div>
                                      
                                       <div class="grid-price mt-2">
                                               <tr>
                                                <td>Tshirt Size:-</td>
                                           <td>  <a>{{$t->size}}</a></td>
                                           &nbsp;
<!--                                            <td><button class="btn btn-info" name="book" value="book" id="book">Buy</button></td> -->           </tr>
                                          
                            
                                        </div>
                                    </div>
                                     
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                        </div>
</div>
                        @endforeach
                     
                   
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
 </body>
 </html>