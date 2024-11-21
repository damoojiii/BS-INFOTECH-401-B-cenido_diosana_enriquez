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
		<div class="">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{{asset('assets/images/logo.png')}}" alt="IMG-LOGO">
					</a>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal2">
							<span class="lnr lnr-file-add"></span>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('assets/images/icons/icon-close.png')}}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Product -->
	<section class="bg0 mt-3 p-t-23 p-b-140">
		<div class="container">
			@if (session('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert" >{{session('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
			@endif
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="row isotope-grid mt-4">
				@if($product->isEmpty())
					<div class="col-12 text-center p-t-40 m-b-120">
						<p class="stext-102 cl3">No products added yet.</p>
					</div>
				@else
					@foreach($product as $products)
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{ asset('storage/' . $products->img_path) }}" alt="IMG-PRODUCT" class="product-img">
			
								<a href="#" 
								   class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" 
								   data-product-id="{{ $products->id }}"
								   data-product-name="{{ $products->product_name }}"
								   data-product-price="{{ $products->price }}"
								   data-product-description="{{ $products->description }}"
								   data-product-quantity="{{ $products->quantity }}"
								   data-product-img="{{ asset('storage/' . $products->img_path) }}">
								   Quick View
								</a>
							</div>
			
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{ $products->product_name }}
									</a>
			
									<span class="stext-105 cl3">
										PHP {{ $products->price }}
									</span>
								</div>
			
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-03.png') }}" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				@endif
			</div>
			
		</div>
	</section>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{asset('assets/images/icons/icon-close.png')}}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="" id="modal-product-thumb">
										<div class="wrap-pic-w pos-relative">
											<img id="modal-product-img" src="" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="" id="modal-product-link">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 id="modal-product-name" class="mtext-105 cl2 js-name-detail p-b-14"></h4>
							<span id="modal-product-price" class="mtext-106 cl2"></span>
							<div class="p-t-23">
								<strong><p>Product Detail:</p></strong>
								<p id="modal-product-description" class="stext-102 cl3"></p>
								<div class="mt-3">
									<strong><p>Quantity:</strong> <span id="modal-product-quantity"></span></p>
								</div>
							</div>
							
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-r-m respon6-next" @style('gap: 10px;')>
										<a href="" id="modal-edit-button" class="flex-c-m stext-101 cl0 size-104 bg1 bor1 hov-btn1 p-lr-15 trans-04">
											<span class="lnr lnr-pencil"></span>
										</a>
										<form method="POST" action="" id="modal-delete-button" enctype="multipart/form-data">
											<input type="hidden" name="_method" value="DELETE">
											<input type="hidden" name="_token" value="{{csrf_token()}}">
											<button type="submit" class="flex-c-m stext-101 cl0 size-104 bg1 bor1 hov-btn1 p-lr-15 trans-04">
												<span class="lnr lnr-trash"></span>
											</button>
										</form>
									</div>
								</div>	
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal2 -->
	<div class="wrap-modal2 js-modal2 p-t-60 p-b-20">
		<div class="overlay-modal2 js-hide-modal2"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal2">
					<img src="{{asset('assets/images/icons/icon-close.png')}}" alt="CLOSE">
				</button>

				<div class="row justify-content-center">
					<div class="col-md-8 p-b-30">
						<form class="p-l-25 p-r-30 p-lr-0-lg" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
							<h4 class="mtext-105 cl2 p-b-20">
								Add New Product
							</h4>
							<input type="hidden" name="_token" value="{{csrf_token()}}">

							<!-- Product Name -->
							<div class="p-b-15">
								<label for="product_name" class="stext-102 cl3 p-b-5">Product Name</label>
								<input class="size-116 bor8 stext-102 cl2 p-lr-20" type="text" id="product_name" name="product_name" placeholder="Enter product name" required>
							</div>

							<!-- Image Path -->
							<div class="p-b-15">
								<label for="img_path" class="stext-102 cl3 p-b-5">Upload Image</label>
								<input class="size-116 bor8 stext-102 cl2 p-lr-20" type="file" id="img_path" name="img_path" accept="image/*" required>
							</div>

							<!-- Description -->
							<div class="p-b-15">
								<label for="description" class="stext-102 cl3 p-b-5">Description</label>
								<textarea class="size-116 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="description" name="description" rows="4" placeholder="Enter product description" required></textarea>
							</div>

							<!-- Quantity -->
							<div class="p-b-15">
								<label for="quantity" class="stext-102 cl3 p-b-5">Quantity</label>
								<input class="size-116 bor8 stext-102 cl2 p-lr-20" type="number" id="quantity" name="quantity" min="1" placeholder="Enter quantity" required>
							</div>

							<!-- Price -->
							<div class="p-b-15">
								<label for="price" class="stext-102 cl3 p-b-5">Price</label>
								<input class="size-116 bor8 stext-102 cl2 p-lr-20" type="number" id="price" name="price" step="0.01" placeholder="Enter price" required>
							</div>

							<!-- Submit Button -->
							<div class="p-t-20">
								<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" type="submit">
									Save Product
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
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

	<script>
		const editRouteTemplate = "{{ route('product.edit', ':id') }}";
		const deleteRouteTemplate = "{{ route('product.destroy', ':id') }}";
	</script>	
</body>
</html>