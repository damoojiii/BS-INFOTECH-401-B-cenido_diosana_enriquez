<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->	
	    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/animate/animate.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('assets/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!--===============================================================================================-->
    <title>Hatdog Sari-sari Store</title>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{{asset('assets/images/logo.png')}}" alt="IMG-LOGO">
					</a>	
				</nav>
			</div>	
		</div>
	</header>

	<!-- Product -->
	<section class="bg0 mt-3 p-t-23 p-b-140">
		<div class="container">
			<div class="row justify-content-center">
                <div class="col-md-8 p-b-30">
                    <form class="p-l-25 p-r-30 p-lr-0-lg" method="POST" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                        <h4 class="mtext-105 cl2 p-b-20">
                            Edit Product
                        </h4>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <!-- Product Name -->
                        <div class="p-b-15">
                            <label for="product_name" class="stext-102 cl3 p-b-5">Product Name</label>
                            <input class="size-116 bor8 stext-102 cl2 p-lr-20" type="text" id="product_name" name="product_name" value="{{$product->product_name}}" required>
                        </div>

                        <!-- Image Path -->
                        <div class="p-b-15">
                            <label for="img_path" class="stext-102 cl3 p-b-5">Upload Image (Optional)</label>
                            <input class="size-116 bor8 stext-102 cl2 p-lr-20" type="file" id="img_path" name="img_path" accept="image/*">
                        </div>

                        <!-- Description -->
                        <div class="p-b-15">
                            <label for="description" class="stext-102 cl3 p-b-5">Description</label>
                            <textarea class="size-116 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="description" name="description" rows="4" required>{{ old('description', $product->description) }}</textarea>
                        </div>

                        <!-- Quantity -->
                        <div class="p-b-15">
                            <label for="quantity" class="stext-102 cl3 p-b-5">Quantity</label>
                            <input class="size-116 bor8 stext-102 cl2 p-lr-20" type="number" id="quantity" name="quantity" min="1" value="{{$product->quantity}}" required>
                        </div>

                        <!-- Price -->
                        <div class="p-b-15">
                            <label for="price" class="stext-102 cl3 p-b-5">Price</label>
                            <input class="size-116 bor8 stext-102 cl2 p-lr-20" type="number" id="price" name="price" step="0.01" value="{{$product->price}}" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="size-204 p-t-20 d-flex justify-content-start" style="gap: 10px;">
                            <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" type="submit">
                                Edit Product
                            </button>
                            <a href="{{ route('product.index') }}" class="flex-c-m stext-101 cl0 size-101 bg7 bor1 hov-btn3 p-lr-15 trans-04">
                                Cancel
                            </a>
                        </div>                        
                    </form>
                </div>
            </div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


    <!--===============================================================================================-->	
	<script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/animsition/js/animsition.min.js')}}"></script>	
    <!--===============================================================================================-->
        <script src="{{asset('assets/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/parallax100/parallax100.js')}}"></script>
        <script>
            $('.parallax100').parallax100();
        </script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
        <script>
            $('.gallery-lb').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled:true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        </script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/isotope/isotope.pkgd.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/sweetalert/sweetalert.min.js')}}"></script>
        <script>
            $('.js-addwish-b2').on('click', function(e){
                e.preventDefault();
            });
    
            $('.js-addwish-b2').each(function(){
                var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
    
                    $(this).addClass('js-addedwish-b2');
                    $(this).off('click');
                });
            });
    
            $('.js-addwish-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
    
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
    
                    $(this).addClass('js-addedwish-detail');
                    $(this).off('click');
                });
            });
    
            /*---------------------------------------------*/
    
            $('.js-addcart-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });
        
        </script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script>
            $('.js-pscroll').each(function(){
                $(this).css('position','relative');
                $(this).css('overflow','hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });
    
                $(window).on('resize', function(){
                    ps.update();
                })
            });
        </script>
    <!--===============================================================================================-->
        <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>