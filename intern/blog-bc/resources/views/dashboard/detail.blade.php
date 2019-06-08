@extends('layouts.app')
@section('content')
@include('dashboard._messages')
        <!DOCTYPE HTML>
<html>
<head>
    <title>{{$posts->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="web,design,html,css,html5,development,hoaiav"/>
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})" alt="Forest" class="w3-opacity">


<!-- header-section-starts -->
<div class="h-top" id="home"></div>
<div class="full">
    <div class="col-md-12 main">
        <!--banner-section-->
        <div class="banner-section">
            @if(session('Success'))
                <h4 style="text-align: center">
                    <textbox
                            style="background: #00f98f;color: #00A000;text-align: center">{{session('Success')}}</textbox>
                </h4>
            @endif
            <div class="banner">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <div class="b-bottom">

                                <h5 class="top"><a style="color: red;text-align: center">{{$posts->title}}</a>
                                    <div class="fb-share-button" data-href="{{route('posts.detail',$posts->id)}}"
                                         data-layout="button_count" data-size="large" data-mobile-iframe="true"><a
                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fhoai2110&amp;src=sdkpreparse"
                                                class="fb-xfbml-parse-ignore">Share on Facebook</a></div>
                                </h5>
                                <img class="w3-opacity w3-hover-opacity-off" alt="Alps"
                                     src="{{asset('images/upload/'. $posts->picture)}}"/>
                                <h4 style="color: #ededed">{{$posts->description}}</h4>
                                <p>{!! $posts->contents !!}</p>
                                <p>Written on: {{date('M j ,Y h:ia',strtotime($posts->created_at))}}</p>
                                <div>
                                    <strong>Tag: </strong>
                                    @foreach($posts->tags as $tag)
                                        <label class="label label-info">{{ $tag->name }}</label>
                                    @endforeach
                                    <br><hr>
                                    <span style="font-size: 14px" class="label label-default"><strong>Post In: </strong><a href="{{route('categories.show',$posts->category['id'])}}">{{$posts->category['name']}}</a></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--banner-->
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
                <div class="clearfix"></div>
            </div>

            @if(isset(Auth::user()->id))
                <div class="Comments">
                    <div class="coment-form" style="margin-top: 30px">
                        {{Form::open(['route'=>['comments.store',$posts->id],'method' => 'POST'])    }}
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::label('comments', 'Comment :') }}
                                {{ Form::textarea('comments', null, ['class' => 'form-control','rows =5']) }}
                                {{ Form::submit('Add Comments',['class' => 'form-control','style'=>'margin-top: 55px']) }}
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                    <div class="clearfix"></div>
                </div>

            @endif
            <div class="clearfix"></div>

        </div>

        <div class="banner-right-text">
            <h4 class="" style="color: deepskyblue;text-align: center">Comments</h4>
            <div class="row" style="margin-left: 20px">
                @foreach($posts->comments as $comments)
                    <div class="media">
                        <div class="media-left media-top">
                            <a href="{{route('posts.show',$comments->user->id)}}">
                                <img width="50" height="50" class="img-circle"
                                     src="{{asset('images/upload/'. $comments->user->avatar)}}"/>
                            </a>
                            <h4 class="media-heading"><strong><a href="{{route('posts.show',$comments->user->id)}}"
                                                                 style="color: deepskyblue">{{$comments->user->name}}: </a></strong></h4>
                        </div>
                        <div class="media-body">

                           <p style="color: silver;"> {{$comments->comments}}</p>
                            <p>{{date('M j ,Y h:ia',strtotime($comments->created_at))}}</p>

                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>

        </div>
        <div class="clearfix"></div>
        <!--/footer-->
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        @include('dashboard.footer')
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection