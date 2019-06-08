@extends('layouts.app')
@section('content')

        <!DOCTYPE HTML>
<html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>NashTech Blog</title>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CK editor -->
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>

</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">

<div class="full">
    <div class="response">
        <h3 style="text-align: center">Edit your post</h3>
        <div class="col-md-12 footer-grid">
            <div class="coment-form">
                {!! Form::model($posts, ['route'=>['posts.update',$posts->id],'method'=>'PUT','files'=>true] )  !!}
                <div class="form-group">
                    {{Form::label('title','title')}}
                    {{Form::text('title',$posts->title,['class'=>'form-control','required'=>'','placeholder'=>'title','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description','Description')}}
                    {{Form::text('description',$posts->description,['class'=>'form-control','required'=>'','placeholder'=>'Description','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'])}}
                </div>
                <div class="form-group">
                    {{Form::label('contents','contents')}}
                    {{Form::textarea('contents',$posts->contents,['class'=>'ckeditor','placeholder'=>'contents','style'=>'width: 870px'])}}
                </div>

                {{Form::label('picture', 'Edit Your Image')}}
                {{Form::file('picture')}}

                <br>
                {{Form::label('category_id','Category: ')}}
               {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}
                <br>

                <div class="form-group">
                    {{Form::label('tags','Tag')}}
                    {{Form::text('post_tag',$posts->tagList ?? null,['class'=>'form-control','required'=>'','placeholder'=>'hoai dit thui','style'=>'width: 870px'])}}
                </div>

                {{Form::submit('Submit',['class'=>'btn btn-primary']) }}

                {!! Form::close() !!}

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    @include('dashboard.footer')    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("ckeditor").submit(function (e) {
            var messageLength = CKEDITOR.instances['ckeditor'].getData().replace(/<[^>]*>/gi, '').length;
            if (!messageLength) {
                alert('Please enter a text');
                e.preventDefault();
            }
        }
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>
</body>
</html>
@endsection
