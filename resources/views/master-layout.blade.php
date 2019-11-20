<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Học Tiếng Anh 10 - @yield('title')</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap_4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/fontawesome.5.7.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="lib/OwlCarousel2-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="lib/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css">
    <!-- Start WOWSlider.com HEAD section -->
    <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="lib/banner-slider/engine1/style.css" />
    <!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/sanpham.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/home-responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap_4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{  asset('js/home.js') }}"></script>



</head>

<body>

    @include('header')
    @yield('content')
    @include('footer')





	<!-- custom js -->
	<script>
	$(document).ready(function () {
		$(".content-box").slideUp();
        var down = false;
		$(".box-1-title").click(function(){
            $(this).next(".content-box").slideToggle(500);
            if(down === false){
                $(this).addClass("hihi");
                return down = true;
            }
            else{
                $(this).removeClass("hihi");
                return down = false;
            }

        })

        $(".fa-list").click(function(){
            $(".product-list").show();
            $(".product-box").hide();
        })
        $(".fa-th").click(function(){
            $(".product-box").show();
            $(".product-list").hide();
        })
    });


	</script>

</body>

</html>
