<!DOCTYPE html>
<html>
   <head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms Shop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href=" {{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
   @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

         @if(session()->has('message'))

            <div class="alert alert-success" >
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               {{session()->get('message')}}

            </div>

         @endif
 
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%;padding:30px">
                     <div class="img-box" style="padding: 20px;">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>

                        @if($product->discount_price!=null)
                        <h6 style="color: red">
                           Discount Price
                           <br>
                           ${{$product->discount_price}}
                        </h6> 

                        <h6 style="text-decoration: line-through; color:blue">
                           Price
                           <br>
                           ${{$product->price}}
                        </h6>

                        @else

                        <h6 style="color:blue">
                           Price
                           <br>
                           ${{$product->price}}
                        </h6>

                        @endif

                        <h6>Product Catagory : {{$product->catagory}}</h6>

                        <h6>Product Description : {{$product->description}}</h6>

                        <h6>Available Quantity : {{$product->quantity}}</h6>

                        <form action="{{url('add_cart',$product->id)}}" method="Post">

                              @csrf

                                 <div class="row"> 
                                    <div class="col-md-4">

                                       <input type="number" name="quantity" value="1" min="1" style="width:100px">

                                    </div>

                                    <div class="col-md-4">

                                 <input type="submit" value="Add To Cart">

                                    </div>

                                 </div>
                           </form>

                        
                     </div>
                  </div>
               </div>         

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://VNTAD.com/" target="_blank">VNTAD</a>
         
         </p>
      </div>
      <script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to add cart this product",
            text: "You will be broke (-_-)!!",
            icon: "info",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  
            else
            {
                
            }


        });

        
    }
</script>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>