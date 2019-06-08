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
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Category
                </button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Category</h4>
                            </div>
                            <div class="modal-body">
                                <div class="well">
                                    @foreach($category as $category)
                                        <p><a href="{{route('categories.show',$category->id)}}"
                                              style="color: deepskyblue;font-size: 22px">{{$category->name}}</a></p>
                                        <br>
                                    @endforeach
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                @foreach($posts as $value)
                    <div class="col-md-6">
                        <a href="/detailPost/{{$value->id}}"> <img width="700" height="400" class="img-rounded"
                                                                   alt="Cinque Terre"
                                                                   src="{{asset('images/upload/'. $value->picture)}}"/></a>
                        <a href="/detailPost/{{$value->id}}"><h5 class="top"
                                                                 style="font-size: 22px;color: deepskyblue">{{$value->title}}</h5>
                        </a>

                        <p style="font-size: 16px;color: #ededed">{{$value->description}}</p>
                        <p>Written on: {{date('M j ,Y h:ia',strtotime($value->created_at))}}</p>
                        <span style="font-size: 14px" class="label label-default"><strong>Post In: </strong><a
                                    href="{{route('categories.show',$value->category['id'])}}">{{$value->category['name']}}</a></span>
                        <p></p>
                    </div>
                    <hr>
                    <br>
                @endforeach
                <div class="clearfix"></div>
                {!! $posts->links() !!}
            </div>
            <div class="clearfix"></div>


            @include('dashboard.footer')
            <div class="clearfix"></div>
        </div>
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