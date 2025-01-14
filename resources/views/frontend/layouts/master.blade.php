<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Roy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
@yield('meta')
  <!-- Favicons -->
  <link href="{{asset('/frontend')}}/assets/img/favicon.pn" rel="icon">
  <link href="{{asset('/frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="{{'/frontend'}}/assets/vendor/aos/aos.css" rel="stylesheet"> -->

  <link href="{{'/frontend'}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{'/frontend'}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="{{asset('/toastr/toastr.min.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{asset('/frontend')}}/assets/css/style.css" rel="stylesheet">
  <style>
    .list-unstyled li:first-of-type ul {
    width: 44em;
}
</style>

</head>

<body>

	<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
		@php
			$setting = DB::table('settings')->first();
		@endphp 
      <div class="logo">
        <h1 class="text-dark"><a href="/"> 
			@if($setting)
		<img src="{{$setting->logo}}">
			@else
			<span>LOGO<b>HERE</b></span>
			@endif
		</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
<!--        <ul class="nav-0">
          <li class="main-nav"><a class="nav-link scrollto active" href="/">Home</a></li>
          <li class="main-nav"><a class="nav-link scrollto" href="{{route('about-us')}}">ABOUT</a></li>
          <li class="nav-item dropdown">
            <a href="{{route('product-lists')}}" class="nav-link dropdown-toggle"  id="megaMenuDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">PRODUCTS</a>
			  @php
			  $cat = DB::table('categories')->get();
			  @endphp
            <div class="dropdown-menu mega-menu" aria-labelledby="megaMenuDropdown">
              <div class="container">
                <div class="row">
                  <ul class="list-unstyled">
					  @if($cat)
					  @foreach($cat as $category)
                    <li class="dropdown-item dropdown">
                      <a href="{{route('product-cat',$category->slug)}}">{{$category->title}}</a>
                      @php
								$subcat = DB::table('sub_categories')->where('cat_id',$category->id)->where('status','active')->get();
								@endphp
								@if(count($subcat) > 0)

                      <ul class="dropdown-menu">
                        <li>
                          <div class="container-fluid">
                            <div class="row">
								
								@foreach($subcat as $subcategory)
								  <div class="col-md-3">
									  <a class="roy-inner" style="margin:0;padding-left:0;" href="{{route('product-sub-cat',[$category->slug,$subcategory->slug])}}"><h4>{{$subcategory->title}}</h4></a>
									@php
										$childcat = DB::table('child_categories')->where('cat_id',$category->id)->where('sub_cat_id',$subcategory->id)->where('status','active')->get();
										@endphp
										@if($childcat)
										@foreach($childcat as $childcategory)
									  		<a href="{{route('product-child-cat',[$category->slug,$subcategory->slug,$childcategory->slug])}}" class="drop-a">{{$childcategory->title}}</a>
										@endforeach
										@endif	  
								  </div>
								@endforeach
                            </div>
                          </div>
                        </li>
                      </ul>
								@endif

                    </li>
					  @endforeach
					  @endif
                    
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="main-nav"><a class="nav-link scrollto" href="{{route('contact')}}">CONTACT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i> -->
		  
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav-0">
          <li class="main-nav"><a class="nav-link scrollto {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a></li>
          <li class="main-nav"><a class="nav-link scrollto {{ request()->routeIs('about-us') ? 'active' : '' }}" href="{{route('about-us')}}">ABOUT</a></li>
          <li class="nav-item dropdown">
            <a href="{{route('product-lists')}}" class="nav-link dropdown-toggle {{ request()->routeIs(['product-cat.*', 'product-sub-cat.*','product-child-cat.*']) ? 'active' : '' }}"  id="megaMenuDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">PRODUCTS</a>
			  @php
			  $cat = DB::table('categories')->get();
			  @endphp
            <div class="dropdown-menu mega-menu" aria-labelledby="megaMenuDropdown">
              <div class="container">
                <div class="row">
                  <ul class="list-unstyled">
					  @if($cat)
					  @foreach($cat as $category)
                    <li class="dropdown-item dropdown">
                      <a href="{{route('product-cat',$category->slug)}}">{{$category->title}}</a>
                      @php
								$subcat = DB::table('sub_categories')->where('cat_id',$category->id)->where('status','active')->get();
								@endphp
								@if(count($subcat) > 0)

                      <ul class="dropdown-menu">
                        <li>
                          <div class="container-fluid">
                            <div class="row">
								
								@foreach($subcat as $subcategory)
								  <div class="col-md-3">
									  <a class="roy-inner" style="margin:0;padding-left:0;" href="{{route('product-sub-cat',[$category->slug,$subcategory->slug])}}"><h4>{{$subcategory->title}}</h4></a>
									@php
										$childcat = DB::table('child_categories')->where('cat_id',$category->id)->where('sub_cat_id',$subcategory->id)->where('status','active')->get();
										@endphp
										@if($childcat)
										@foreach($childcat as $childcategory)
									  		<a href="{{route('product-child-cat',[$category->slug,$subcategory->slug,$childcategory->slug])}}" class="drop-a">{{$childcategory->title}}</a>
										@endforeach
										@endif	  
								  </div>
								@endforeach
                            </div>
                          </div>
                        </li>
                      </ul>
								@endif

                    </li>
					  @endforeach
					  @endif
                    
                    <!-- Add more categories and subcategories as needed -->
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="main-nav"><a class="nav-link scrollto {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{route('contact')}}">CONTACT</a></li>
        </ul>
    </div>
      </nav><!-- .navbar -->
		
		<!--New Navbar-->
		
      <div class="nav-clo icon-sec">
        <ul>
          <li><a class="icon-b-x" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:"><i class='bx bx-search'></i></a></li>
          <!-- Modal -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
              <form method="get" action="{{route('product.search')}}">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <input type="text" class="form-control"> -->
                    <input name="search" class="form-control" placeholder="Search Products Here....." type="search">
                    <button style='font-family: "Raleway", sans-serif;font-weight: 500;font-size: 16px;letter-spacing: 1px;display: inline-block;padding: 15px 28px;border-radius: 3px;transition: 0.5s;margin-top: 30px;color: #fff;background: #FB9D4A;'>search</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <li>
            <div class="cart-icon">
              <a class="icon-b-x" href="/cart">
                <i class='bx bx-shopping-bag'></i>
                @if(auth::check())<span class="quantity">{{count(Helper::getAllProductFromCart())}}</span>@endif
              </a>
          </div>
          </li>
          @if(!Auth::check())
          <li><a class="getstarted scrollto" href="{{url('user/login')}}">Login</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{url('/home')}}">{{Auth::user()->name}}</a></li>
          @endif
        </ul>
      </div>
    </div>
  </header><!-- End Header -->
	@yield('content')
	
	
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
          <div class="logo">
            <h1 class="text-dark"><a href="/"> 
              @if($setting)
              <img style="max-height: 80px;" src="{{$setting->logo}}">
              @else
              <span>LOGO<b>HERE</b></span>
              @endif
            </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
            <p></p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Product</h4>
            <ul>
              <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/fragrance">Fragrance</a></li>
             <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/skincare-2309201520-474">Skincare</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/makeup-2309201424-778">Makeup</a></li>
             <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/haircare-2309201342-703">Haircare</a></li>           
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="    font-size: 0px;
    line-height: 23px;">server</h4>
            <ul>
 <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/aromatherapy-2309200911-240">Aromatherapy</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/candles-2309201003-957">Candles</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="https://roy.ad-wize.com/product-cat/gifts-2310162520-741">Gifts</a></li>
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Company</h4>
            <ul>
              <li><i class="bx bx-chevron-righ"></i> <a href="{{route('about-us')}}">About</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="#">Terms</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="#">Privacy policy</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="#">Career</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <ul>
              <li><i class="bx bx-chevron-righ"></i> <a href="tel:331 200-9668">(331) 200-9668</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="#">4435 Sand Fork Road Galveston, IN 46932</a></li>
              <li><i class="bx bx-chevron-righ"></i> <a href="mailto:nextick01@gmail.com">nextick01@gmail.com</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-3">
      <div class="copyright">
        &copy; Copyright © 2023. Roy
      </div>
    </div>
  </footer><!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Toastr -->
<script src="{{asset('/toastr/toastr.min.js')}}"></script>
     <script>
       @if(session('success'))
       toastr.success("{{session('success')}}");
       @endif
       @if(session('error'))
         toastr.error("{{session('error')}}")
       @endif
       @if($errors->any())
           @foreach ($errors->all() as $error)
           toastr.error("{{$error}}")
           @endforeach
       @endif
      
   </script>


<script>
	$(document).ready(function(){
		$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') );
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});


		$('.plus').click(function () {
			let oldval = $(this).prev().val();
			// alert();
				// if ($(this).prev().val() < 3) {
				$(this).prev().val(Number(oldval) + 1);
				// }
		});
		$('.minus').click(function () {
			let oldval = $(this).next().val();
			$(this).next().val( Number(oldval) - 1);
		});
	</script>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- End Shop Newsletter -->
<script>
    var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
</script>
<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
<script>
$(document).ready(function() { $("select.select2").select2(); });
  $('select.nice-select').niceSelect();
</script>
<script>
function showMe(box){
  var checkbox=document.getElementById('shipping').style.display;
  // alert(checkbox);
  var vis= 'none';
  if(checkbox=="none"){
    vis='block';
  }
  if(checkbox=="block"){
    vis="none";
  }
  document.getElementById(box).style.display=vis;
}
</script>
<script>
$(document).ready(function(){
  $('.shipping select[name=shipping]').change(function(){
    let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
    let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
    let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
    // alert(coupon);
    $('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
  });

});

</script>

<script>
   

var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
</script>

<script type="text/javascript" src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
// $("#visa").click(function(){
  var stripe = Stripe(publishable_key);
  // Create an instance of Elements.
  var elements = stripe.elements();

  // Custom styling can be passed to options when creating an Element.
  // (Note that this demo uses a wider set of styles than the guide below.)
  var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
  };

  // Create an instance of the card Element.
  var card = elements.create('card', {style: style});

  // Add an instance of the card Element into the `card-element` <div>.
  card.mount('#card-element');

  // Handle real-time validation errors from the card Element.
  card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
  });

  // Handle form submission.
  var form = document.getElementById('payment-form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
  });

  // Submit the form with the token ID.
  function stripeTokenHandler(token) 
  {
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
    form.submit();
  }
  

// });
function changeimage()
{
	var id = $('#size').val();
	
	$.ajax({
		url: "{{ asset('/get_variant/') }}/"+id,
		type: 'GET',
		dataType: 'json',
		success: function(data) {
			$('#varprice').text('$'+data.price);
			$('#varimage').attr('src',"{{ asset('/uploads/product/size/') }}/"+data.image);
		}
	});
}
function validateForm() {
    var radios = document.getElementsByName("payment_method");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    // $('#card-errors').html("Must check some payment mathod!");
    // return formValid;
}
</script>  <!-- Vendor JS Files -->
  <script src="{{'/frontend'}}/assets/vendor/aos/aos.js"></script>
  <script src="{{'/frontend'}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


  <!-- Template Main JS File -->
  <script src="{{asset('/frontend')}}/assets/js/main.js"></script>
  
  <!-- Slick-slider JS File -->
  <script type="text/javascript">
   $(document).ready(function(){
	   
	   
      $('.items').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
    });
  </script>
	
	<script>
  $(".pro-slider").slick({
 slidesToShow: 4,
 infinite:true,
 slidesToScroll: 3,
 autoplay: true,
 autoplaySpeed: 2000,
    dots: false, Boolean,
    arrows: true
});
</script>
	
		<script>
  $(".prologo-slider").slick({
 slidesToShow: 8,
 infinite:true,
 slidesToScroll: 5,
 autoplay: true,
 autoplaySpeed: 1500,
    dots: false, Boolean,
    arrows: true,
});
</script>
			<script>
  $(".Beauty-slider").slick({
 slidesToShow:1,
 infinite:true,
 slidesToScroll: 1,
 autoplay: true,
 autoplaySpeed: 2000,
    dots: false, Boolean,
    arrows: true
});
</script>

</body>

</html>