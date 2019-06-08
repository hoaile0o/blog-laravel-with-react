@extends('layouts.app')
@section('content')
        <!DOCTYPE HTML>
<html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>NashTech Blog</title>
</head>
<body style="background-image: url({{asset('images/blog1.jpg')}})">
<div class="full">

    <div class="col-md-10">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel-heading">Register</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name :</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   style='color: #ededed;background:none;padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'
                                   required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address :</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email"
                                   style='color: #ededed;background:none;padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password :</label>

                        <div class="col-md-6">
                            <input style='color: #ededed;background:none;padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'
                                   id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password :</label>

                        <div class="col-md-6">
                            <input style='color: #ededed;background:none;padding: 12px 20px; margin: 8px 0; box-sizing: border-box;border: none; border-bottom: 2px solid red;'
                                   id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary" style="color: #eedbdb;background: none">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                                 style="opacity: 1;"> </span></a>
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
