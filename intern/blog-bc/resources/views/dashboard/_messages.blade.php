{{--store or edit--}}
@if(Session::has('success'))
    <div style="width: 90%;float: inside" class="alert alert-success alert-dismissible" role="alert">

        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success: </strong> {{Session::get('success')}}
                </div>
            </div>
        </div>

    </div>
@endif

{{--delete post--}}
@if(Session::has('delete'))
    <div style="width: 90%;float: inside" class="alert alert-success alert-dismissible" role="alert">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success: </strong> {{Session::get('delete')}}
                </div>
            </div>
        </div>
    </div>
@endif

{{--delete category--}}
@if(Session::has('deleteCategory'))
    <div style="width: 90%;float: inside" class="alert alert-success alert-dismissible" role="alert">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success: </strong> {{Session::get('deleteCategory')}}
                </div>
            </div>
        </div>
    </div>
@endif

{{--comment--}}
@if(Session::has('comment'))
    <div style="width: 90%;float: inside" class="alert alert-success alert-dismissible" role="alert">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success: </strong> {{Session::get('comment')}}
                </div>
            </div>
        </div>
    </div>
@endif

{{--category--}}
@if(Session::has('category'))
    <div style="width: 90%;float: inside" class="alert alert-success alert-dismissible" role="alert">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success: </strong> {{Session::get('category')}}
                </div>
            </div>
        </div>
    </div>
@endif

{{--errors--}}
{{--@if(count($errors) >0)--}}
    {{--<div style="width: 90%;" class="alert alert-danger alert-dismissible" role="alert">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="text-center">--}}
                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span--}}
                                {{--aria-hidden="true">&times;</span></button>--}}
                    {{--<strong style="text-align: center">Error: </strong>--}}
                    {{--<ul>--}}
                        {{--@foreach($errors->all() as $error)--}}
                            {{--<li>{{$error}}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endif--}}


{{--email--}}
@if(Session::has('email'))
    <div style="width: 90%;float: inside" class="alert alert-success alert-dismissible" role="alert">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success: </strong> {{Session::get('email')}}
                </div>
            </div>
        </div>
    </div>
@endif