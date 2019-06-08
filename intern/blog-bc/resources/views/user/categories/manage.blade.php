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
            <div class="col-md-8" style="color: #ededed">
                <h1>Categories</h1>
                <table class="table">
                    <thead>
                    <tr class="info" style="color: black">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>###</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($category as $category)
                        <tr>
                            <th>{{$category->id}}</th>
                            <td><a style="color: #ededed" href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></td>
                            <td>{{date('M j ,Y h:ia',strtotime($category->created_at))}}</td>
                            <td>
                                {!!Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE']) !!}
                                {{Form::submit('Delete',['class'=>'btn btn-danger btn-block'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="col-md-4" style="margin-top: 50px">
                <div class="well">
                    {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
                    <h4 style="text-align: center;color: #ededed">New Category</h4>
                    {{Form::label('name','Name:',['style'=>'color:#ededed'])}}
                    {{Form::text('name',null,['class'=>'form-controll','style'=>'width:88%'])}}
                    {{Form::submit('Submit',['class'=>'btn btn-primary btn-block','style'=>'background:none'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr  width="50%" align="center" />
</div>
@include('dashboard.footer')
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