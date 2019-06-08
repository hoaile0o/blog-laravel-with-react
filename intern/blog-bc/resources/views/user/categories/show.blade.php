@extends('layouts.app')
@section('content')
@include('dashboard._messages')

        <!DOCTYPE HTML>
<html>
<head>
    <title>NashTech Blog</title>
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
<div class="full">
    <div class="col-md-12 main">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tittle">Category: {{$category->name}}</h3>
                @foreach($posts as $value)
                    <div class="col-md-6">
                        <a href="/detailPost/{{$value->id}}"> <img class="img-rounded" alt="Cinque Terre"
                                                                   style="width: 700px;height: 400px"
                                                                   src="{{asset('images/upload/'. $value->picture)}}"/></a>

                        <a href="/detailPost/{{$value->id}}"><h5 class="top"
                                                                 style="font-size: 22px;color: deepskyblue">{{$value->title}}</h5>
                        </a>

                        <p style="font-size: 16px;color: #ededed">{{$value->description}}</p>
                        <p>Written on: {{date('M j ,Y h:ia',strtotime($value->created_at))}}</p>
                        <span style="font-size: 14px" class="label label-default"><strong>Post In: </strong><a
                                    href="#">{{$value->category->name}}</a></span>
                        <p></p>
                    </div>
                    <hr>
                    <br>
                @endforeach
                <div class="clearfix"></div>
                {!! $posts->links() !!}
            </div>

        </div>
        <div class="clearfix"></div>


        @include('dashboard.footer')
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<!--//footer-->
<!--start-smooth-scrolling-->
<script type="text/javascript">
    $(document).ready(function () {


        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>
</body>
</html>
@endsection