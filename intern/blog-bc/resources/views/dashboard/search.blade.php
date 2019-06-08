@extends('layouts.app')
@section('content')
        <!DOCTYPE HTML>
<html>
<head>
    <title>NashTech Blog</title>
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
<div class="full">
    <div class="col-md-12 main">
        <!--banner-section-->
        <div class="banner-section">
            <h3 class="tittle" style="text-align: center">Result: </h3>
            <div class="top-news">

                    @foreach($category as $category)
                        <div class="col-md-8 top-text">
                        <p><a href="{{route('categories.show',$category->id)}}"
                              style="color: deepskyblue;font-size: 22px"># {{$category->name}}</a></p>
                        <br>
                        </div>
                    @endforeach

                <div class="top-inner">
                    @foreach($posts as $value)
                        <div class="col-md-10 top-text">
                            <a href="detailPost/{{$value->id}}"><img width="700" height="400" src="images/upload/{{$value->picture}}"/></a>
                            <a href="detailPost/{{$value->id}}">
                                <h5 class="top"><h3 style="color:#ededed;">{!! $value->title !!}</h3></h5>
                            </a>
                            <p style="font-size: 16px;color: #ededed">{{$value->description}}</p>
                            <p><strong>Written on: </strong>{{date('M j ,Y h:ia',strtotime($value->created_a))}}</p>
                            <span style="font-size: 14px" class="label label-default"><strong>Post In: </strong><a
                                        href="{{route('categories.show',$value->category['id'])}}">{{$value->category['name']}}</a></span>

                        </div>
                        <div class="clearfix"></div>
                    @endforeach <br>
                </div>
            </div>
            <!--//top-news-->
        </div>
        <!--//banner-section-->
        <div class="banner-right-text">
            <h3 class="tittle">News <i class="glyphicon glyphicon-facetime-video"></i></h3>
            <!--/general-news-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img width="500" height="500" src="images/David_Guetta.jpg" class="img-rounded"
                             alt="Cinque Terre">
                        <div class="carousel-caption">
                            David Guetta
                        </div>
                    </div>
                    <div class="item">
                        <img width="500" height="500" src="images/Calvin Harris.jpg" class="img-rounded"
                             alt="Cinque Terre">
                        <div class="carousel-caption">
                            Calvin Harris
                        </div>
                    </div>
                    <div class="item">
                        <img width="500" height="500" src="images/charlieputh.jpg" class="img-rounded"
                             alt="Cinque Terre">
                        <div class="carousel-caption">
                            Charlie Puth
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--/footer-->
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
</body>
</html>
@endsection