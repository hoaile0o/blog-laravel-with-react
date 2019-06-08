@extends('layouts.app')
@section('content')
        <!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<html>
<head>
    <title>NashTech Blog</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <script src="/js/jquery.min.js"> </script>
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/lightbox.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
<div class="full">
    <div class="top-news">
        <div class="top-inner">

            <div class="col-md-pull-4 top-text">
                <div style="color: #ededed" id="user" class="col-lg-12"></div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
@include('dashboard.footer')
<script type="text/javascript">
    $(document).ready(function() {

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection