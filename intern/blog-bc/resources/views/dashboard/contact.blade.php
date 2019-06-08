@extends('layouts.app')
@section('content')

        <!DOCTYPE HTML>
<html>
<head>
    <title>Contact</title>
</head>

<body style="background-image: url({{asset('images/blog1.jpg')}})">

<div class="full">
    <div class="col-md-12 main">
        <div class="col-md-8 col-md-offset-2" style="margin-bottom: 100px">
            @if(isset(Auth::user()->id))
                <div class="col-md-12">
                    <h3 style="text-align: center"><strong>Contact Us</strong></h3>
                    <form action="{{ route('postContact') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <div class="form-group">
                            {{Form::label('subject','Subject: ')}}
                            {{Form::text('subject',null,['class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'])}}
                        </div>

                        {{Form::label('message','Message :')}}
                        {{Form::textarea('message',null,['class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: 2px solid red;'])}}
                        <div class="form-group">
                            {{Form::submit('Submit',['class'=>'btn btn-primary']) }}
                        </div>
                    </form>
                </div>
            @else
                <div class="col-md-12">
                    <h3 style="text-align: center"><strong>Contact Us</strong></h3>
                    <form action="{{ route('postContact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{Form::label('email','Enter your email: ')}}
                            {{Form::text('email',null,array('class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'))}}
                        </div>
                        <div class="form-group">
                            {{Form::label('subject','Subject: ')}}
                            {{Form::text('subject',null,['class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'])}}
                        </div>

                        {{Form::label('message','Message :')}}
                        {{Form::textarea('message',null,['class'=>'form-control','style'=>'padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: 2px solid red;'])}}
                        <div class="form-group">
                            {{Form::submit('Submit',['class'=>'btn btn-primary']) }}
                        </div>
                    </form>
                </div>
            @endif

            <div class="col-md-8 col-md-offset-4">
                <p class="phn" style="color: #ededed"><strong>Hot Line:</strong> 19002024</p>
                <p class="phn-bottom">19 Nguyen Huu Tho
                    <span>Tan Hung, District 7</span></p>
                <h4 class="lom">Visit us at <a style="color: deepskyblue" href="http://www.tdtu.edu.vn/en">http://www.tdtu.edu.vn/en</a>
                </h4>
                <div class="clearfix"></div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
    @include('dashboard.footer')
</div>
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