<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf_token" content="{ csrf_token() }" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic'
          rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
	
	
	
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/lightbox.css"/>
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
<div id="app">
    <div class="h-top" id="home">
        <div class="top-header">
            <ul class="cl-effect-16 top-nag">
                <li><a href=/home><img width="28" height="28" src="{{asset('images/home.png')}}"></a></li>
                <li><a class="{{Request::is('contact')? "active" :""  }}" href="/contact" data-hover="Contact">Contact</a></li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{route('post.newPost')}}" style="color: #ededed;font-size: 22px" data-hover="Write a post"><img width="28" height="28" src="{{asset('images/write.jpg')}}"></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre style="position: relative;padding-left: 50px;">
                            <img src="/images/upload/{{Auth::user()->avatar}}" style="width: 32px;height: 32px;position: absolute;top: 10px;left:10px;border-radius: 50%;">
                            <p style="color: red;font-size: 15px">{{ Auth::user()->name }}<span class="caret"></span></p>
                        </a>

                        <ul class="dropdown-menu" >
                            <li>
                                <a href="{{route('posts.show',Auth::user()->id)}}">Profile <i class="glyphicon glyphicon-user"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                                    Logout <i class="glyphicon glyphicon-log-out"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>

            <div class="search-box">
                <div class="b-search">
                    <form action="/search" method="get" role="search">
                        <input  name="search" type="text" value="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search';}">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/bootstrap.min.js"></script>

<script>
        (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
            t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
        })(window, document, '_gscq','script','//widgets.getsitecontrol.com/143463/script.js');
    </script>
</body>
</html>
