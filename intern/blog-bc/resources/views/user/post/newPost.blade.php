@extends('layouts.app')

@section('content')

@include('dashboard._messages')
        <!DOCTYPE HTML>
<html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>NashTech Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
    <link href="{{ asset('../css/select2.min.css') }}" rel="stylesheet">
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
<div class="full">
    <div class="response">
        <h4 style="text-align: center;color:#feebeb;">What are you thinking,<a style="color: deepskyblue"
                    href="{{route('posts.show',Auth::user()->id)}}"> {{Auth::user()->name}}?</a></h4>
        <div class="col-md-12">
            <div class="coment-form">
                {!! Form::open(array('route'=>'posts.store' , 'data-parsley-validate'=>'','files'=>true)) !!}
                {{Form::label('title','Title: ')}}
                {{Form::text('title',null,array('class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;a'))}}

                {{Form::label('description','Description: ')}}
                {{Form::text('description',null,array('class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'))}}

                {{Form::label('contents','Content:')}}
                {{Form::textarea('contents',null,array('class'=>'ckeditor','style'=>'border-radius:10px;'))}}

                {{Form::label('picture', 'Upload Image: ')}}
                {{Form::file('picture')}}
                <br>
                {{Form::label('category_id','Category: ')}}
                {{Form::hidden('category_name','Category: ')}}
                <select class="form-control" name="category_id">
                    @foreach($categories as $categories)
                        <option value="{{$categories->id}}">{{$categories->name}}</option>
                    @endforeach
                </select>
                <br>

                {{Form::label('Tags','Tag: ')}}
                {{Form::text('post_tag',$post->tagList ?? null,array('class'=>'form-control select2-multi11','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;','multiple'))}}

                {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;width:200px;'))}}

                {!! Form::close() !!}

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    @include('dashboard.footer')
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<!--//footer-->
<!--start-smooth-scrolling-->
<script type="text/javascript">
    $('.select2-multi11').select2({
        placeholder: "Choose tags...",
        minimumInputLength: 2
    });
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});

        $("#ckeditor").validate(
            {
                ignore: [],
                debug: false,
                rules: {
                    ckeditor: {
                        required: function () {
                            CKEDITOR.instances.ckeditor.updateElement();
                        },
                        minlength: 5
                    }
                },
                messages:
                    {

                        ckeditor: {
                            required: "Please enter Text",
                            minlength: "Please enter 5 characters"


                        }
                    }
            });
    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>
</body>
</html>
@endsection
@section('script')
@endsection