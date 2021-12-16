<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Laravel WEB</title>
<meta charset="UTF-8">
<meta name="description" content=" Laravel WEB">
<meta name="keywords" content="Laravel WEB, eCommerce, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="img/favicon.ico" rel="shortcut icon" />

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

<link rel="stylesheet" href="{{'asset/css/bootstrap.min.css%2bfont-awesome.min.css%2bflaticon.css%2bslicknav.min.css%2bjquery-ui.min.css%2bowl.carousel.min.css%2banimate.css%2bstyle.css.pagespeed.cc.tv_fJ1eWUB.css'}}" />
<style>
    .hero-slider .hs-item{
        height:450px;
    }
    .feature:nth-child(2) {
    background: #00dea1;
}
    </style>
</head>
<body>

<!--
<div id="preloder">
<div class="loader"></div>
</div>
-->
<header class="header-section">
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-2 text-center text-lg-left">

<a href="#" class="site-logo">
<img src="{{'asset/image/logo.png'}}" alt="">
</a>
</div>
<div class="col-xl-6 col-lg-5">
<form class="header-search-form">
<input type="text" placeholder="Search on divisima ....">
<button><i class="flaticon-search"></i></button>
</form>
</div>
@if (Auth::user())
<div class="col-xl-4 col-lg-5">
<div class="user-panel">
<div class="up-item">


                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                             <i class="flaticon-profile"></i> <b>( {{Auth::user()->name  }})</b>      
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
</div>
@else
<div class="col-xl-4 col-lg-5">
<div class="user-panel">
<div class="up-item">
<i class="flaticon-profile"></i>
<a href="{{ route('login') }}">Sign</a> In or <a href="{{ route('register') }}">Create Account</a>
</div>
@endif
<div class="up-item">
<div class="shopping-card">
<i class="flaticon-bag"></i>
<span>0</span>
</div>
<a href="#">Shopping Cart</a>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="hero-section">
<div class="hero-slider owl-carousel">

<div class="hs-item set-bg" data-setbg="{{'asset/image/slide-1.jpeg'}}">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 text-black">
<span>New Arrivals</span>
<h2></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna aliqua.  </p>
<a href="#" class="site-btn sb-black" style="background-color:#00dea1;">DISCOVER</a>
<a href="#" class="site-btn sb-black" style="background-color:#000;">ADD TO CART</a>
</div>
</div>
<!--
<div class="offer-card text-white">
<span>from</span>
<h2>$29</h2>
<p>SHOP NOW</p>
</div>-->
</div>
</div>

<div class="hs-item set-bg" data-setbg="{{'asset/image/banner1.jpeg'}}">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 text-white">
<span>New Arrivals</span>
<h2></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna aliqua.  </p>
<a href="#" class="site-btn sb-line">DISCOVER</a>
<a href="#" class="site-btn sb-white">ADD TO CART</a>
</div>
</div>
<!--
<div class="offer-card text-white">
<span>from</span>
<h2>$29</h2>
<p>SHOP NOW</p>
</div>-->
</div>
</div>
<div class="hs-item set-bg" data-setbg="{{'asset/image/banner2.jpeg'}}">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 text-white">
<span>New Arrivals</span>
<h2></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
    incididunt ut labore et dolore magna aliqua.  </p>
<a href="#" class="site-btn sb-line">DISCOVER</a>
<a href="#" class="site-btn sb-white">ADD TO CART</a>
</div>
</div>
<!--<div class="offer-card text-white">
<span>from</span>
<h2>$29</h2>
<p>SHOP NOW</p>
</div>-->
</div>
</div>
</div>
<div class="container">
<div class="slide-num-holder" id="snh-1"></div>
</div>
</section>


<section class="features-section">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 p-0 feature">
<div class="feature-inner">
<div class="feature-icon">
<img src="{{'asset/image/svg/payment-security.svg'}}" alt="#">
</div>
<h2>Fast Secure Payments</h2>
</div>
</div>
<div class="col-md-4 p-0 feature">
<div class="feature-inner">
<div class="feature-icon">
<img src="{{'asset/image/svg/24-hours.svg'}}" alt="#">
</div>
<h2>Service</h2>
</div>
</div>
<div class="col-md-4 p-0 feature">
<div class="feature-inner">
<div class="feature-icon">
<img src="{{'asset/image/svg/free-delivery.svg'}}" alt="#">
</div>
<h2>Free & fast Delivery</h2>
</div>
</div>
</div>
</div>
</section>


<section class="top-letest-product-section">
<div class="container">
<div class="section-title">
<h2>LATEST PRODUCTS</h2>
@if (Auth::user())
@if (Auth::user()->id ==1)	
<a href="{{ route('product.create') }}">
<button class="site-btn sb-black" style="background-color:#00dea1;" >Add Products</button></a>
@endif
@endif
</div>
<div class="product-slider owl-carousel">

 @foreach($product as $productlist)
<div class="product-item">
<div class="pi-pic">
<img src="{{ 'asset/image/product/' }}{{ $productlist->image }}" alt="{{ $productlist->product }}">
<div class="pi-links">
<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
</div>
</div>
<div class="pi-text">
<h6>${{ $productlist->price }}</h6>
<p>{{ $productlist->product }}</p>
</div>
</div>
@endforeach

</div>
</div>
</section>


<section class="footer-section" style="padding-top: 0px;">



<div class="social-links-warp">
<div class="container">
<div class="section-title">
<h4 STYLE="COLOR:WHITE">OUR BRAND LIST</h4>
@if (Auth::user())
@if (Auth::user()->id ==1)	
<a href="{{ route('category.create') }}"><button class="site-btn sb-black" style="background-color:#00dea1;" >Add Brands</button></a>
@endif
@endif
</div>
<BR></BR>
<div class="social-links">
 @foreach($category as $categorylist)     
<img src="{{ 'asset/image/brand/' }}{{ $categorylist->image }}" alt="{{ $categorylist->category }}">
@endforeach
</div>

<p class="text-white text-center mt-5">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and Developed by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">DEMO</a></p>

</div>
</div>
</section>


<script src="{{'asset/js/jquery-3.2.1.min.js'}}"></script>
<script src="{{'asset/js/bootstrap.min.js%2bjquery.slicknav.min.js.pagespeed.jc.qhbxzuSmN8.js'}}"></script><script>eval(mod_pagespeed_cRlG00vsaK);</script>
<script>eval(mod_pagespeed_9OwY3Fg0IV);</script>
<script src="{{'asset/js/owl.carousel.min.js'}}"></script>
<script src="{{'asset/js/jquery.nicescroll.min.js%2bjquery.zoom.min.js.pagespeed.jc.8t1akTsfWA.js'}}"></script><script>eval(mod_pagespeed_hQgbevTeHL);</script>
<script>eval(mod_pagespeed_W_7g7ufioW);</script>
<script src="{{'asset/js/jquery-ui.min.js'}}"></script>
<script src="{{'asset/js/main.js'}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6bacfeef3d0b6ef5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>
