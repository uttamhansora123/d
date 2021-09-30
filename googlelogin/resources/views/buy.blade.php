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

                                                    @if (Session::has('success'))
                        <div class="alert alert-primary text-center">
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif


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
                                           <td><button class="btn btn-info" name="book" value="book" id="book" data-toggle="modal" data-target="#exampleModalCenter">Buy</button></td>

                                           <input type="hidden" id="price" name="price" value="{{$to[0]->price}}">
                                          </tr>
                                          
                            
                                        </div>
                                    </div>





 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payement Demo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                  <form role="form" action="{{ route('buy1') }}" method="post" class="stripe-payment"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="stripe-payment">
                            @csrf

                            <div class="modal-body">

                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input id="name" name="name" class='form-control'
                                        size='6' type='text'>
                                
                            </div>
                                 <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card NUmber</label> 
                                    <input autocomplete='off'
                                        class='form-control card-num' name="cardnumber" id="cardnumber" size='20' type='text'>
                                </div>
                              <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 595'
                                        size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>
                            <input type="hidden" id="price" name="price" value="{{$to[0]->price}}">
                                  <!-- <div class='col-md-12 hide error form-group'>
                                    <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                </div> -->
      </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <div class="row">
                                <button class="btn btn-success btn-md btn-block" id="buy" name="buy" value="buy" style="text-align: center;" type="submit">Pay ${{$to[0]->price}}</button>
                            </div>

      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".stripe-payment");
        $('form.stripe-payment').bind('submit', function (e) {
            var $form = $(".stripe-payment"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeRes);
            }

        });

        function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

                $form.get(0).submit();
            }
        }

    });

</script>