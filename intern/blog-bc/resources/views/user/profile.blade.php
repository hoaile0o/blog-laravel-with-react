@extends('layouts.app')
@section('content')
@include('dashboard._messages')
        <!DOCTYPE HTML>
<html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>NashTech Blog</title>
    <style>
        .menu ul li {
            padding: 0;
            float: right;
            position: relative;
        }

        .menu ul li ul {
            position: absolute;
            border: 1px solid #C3D1EC;
            box-shadow: 0 1px 5px #CCCCCC;
            margin-top: -1px;
            display: none;
            padding: 0px 16px 0px 0;
            right: 0px;
            white-space: nowrap;
        }
    </style>

    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/lightbox.css"/>
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
  <div class="full">
    <div class="col-md-12 main">
        <div class="row">
        <h3 class="tittle" style="text-align: center;color: deepskyblue">About {{$users->name}} <i class="glyphicon glyphicon-user"></i></h3>
        <div class="rslides" id="slider4">
            <div class="col-md-12 col-md-offset-4">
                <img class="img-rounded" alt="Cinque Terre" src="{{asset('images/upload/'. $users->avatar)}}"/>
                <form enctype="multipart/form-data" action="{{'posts.show',Auth::user()->id}}" method="POST">
                    <h4 style="color: #eedbdb">Email : {{$users->email}}</h4>
                    <h4 style="color: #eedbdb">
                        <lable>Change Image :</lable>
                    </h4>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="Submit" class="btn btn-sm btn-primary ">
                </form>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>


        <h3 class="tittle" style="text-align: center;color: deepskyblue">All Post <i
                    class="glyphicon glyphicon-picture"></i></h3>

       <div class="row">
            @foreach($posts as $value)
                <div class="col-md-6">

                    @guest
                        <li><a href="/profile">Edit</a></li>
                        <li><a href="/profile">Delete</a></li>
                    @else

                        <ul style="width: 50px">
                            <a href="/editPost/{{$value->id}}" class="btn btn-primary btn-block"
                               style="text-align: -moz-right">Edit</a>

                            </ul>
                    <ul style="width: 50px">
                        {!! Form::open(['route' => ['posts.destroy', $value->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                        </ul>




                        {{--<li class="dropdown" style="margin-top: 20px;text-align: left">--}}
                            {{--<a href="#" class="dropdown-toggle" style="text-align: right;color: red;"--}}
                               {{--data-toggle="dropdown" role="button" aria-expanded="false"--}}
                               {{--aria-haspopup="true" v-pre style="position: relative;padding-left: 5px;">--}}
                                {{--<h8>Option</h8>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li>--}}
                                    {{--<a href="/editPost/{{$value->id}}" class="btn btn-primary btn-block"--}}
                                       {{--style="text-align: -moz-right">Edit</a>--}}
                                {{--</li>--}}
                                {{--{!! Form::open(['route' => ['posts.destroy', $value->id], 'method' => 'DELETE']) !!}--}}
                                {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    @endguest

                    <ul>
                        <div class="fb-share-button" data-href="{{route('posts.detail',$value->id)}}"
                             data-layout="button_count" data-size="large" data-mobile-iframe="true"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fhoai2110&amp;src=sdkpreparse"
                                    class="fb-xfbml-parse-ignore">Share</a></div>
                    </ul>

                    <a href="/detailPost/{{$value->id}}"> <img class="img-rounded" alt="Cinque Terre"
                                                               style="width: 700px;height: 400px;margin-left: 0px"
                                                               src="{{asset('images/upload/'. $value->picture)}}"/></a>

                    <a href="/detailPost/{{$value->id}}"><h5 class="top"
                                                             style="font-size: 22px;color: deepskyblue">{{$value->title}}</h5>
                    </a>

                    <p style="font-size: 16px;color: #ededed">{{$value->description}}</p>
                    <p>Written on: {{date('M j ,Y h:ia',strtotime($value->created_at))}}</p>
                    <span style="font-size: 14px" class="label label-default"><strong>Post In: </strong><a
                                href="{{route('categories.show',$value->category['id'])}}">{{$value->category['name']}}</a></span>
             <hr>
                </div>

    @endforeach
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {{ $posts->links()}}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@include('dashboard.footer')
<script type="text/javascript">
    $(document).ready(function () {

        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>
@endsection
