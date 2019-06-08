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
        <!--//banner-section-->
        <div class="banner-right-text">
            <h3 class="tittle">News <i class="glyphicon glyphicon-facetime-video"></i></h3>
            <!--/general-news-->
            <div class="general-news">
                <div class="general-inner">
                    <div class="general-text">
                        <h5 class="top"><a href="/single">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna
                            aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0
                            </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56
                            </a><a class="span_link" href="/single"><span
                                        class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="edit-pics">
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/images/f4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="/single">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                            href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/images/f1.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="/single">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                            href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/images/f1.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="/single">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                            href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/images/f4.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="/single">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                            href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="media">
                        <h3 class="tittle media">Media <i class="glyphicon glyphicon-floppy-disk"></i></h3>
                        <div class="general-text two">
                            <a href="/single"><img src="/images/gen3.jpg" class="img-responsive" alt=""></a>
                            <h5 class="top"><a href="/single">Consetetur sadipscing elit</a></h5>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna
                                aliquyam eratsed diam justo duo dolores rebum.</p>
                            <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0
                                </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56
                                </a><a class="span_link" href="/single"><span
                                            class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                        </div>
                    </div>
                    <div class="general-text two">
                        <a href="/single"><img src="/images/gen2.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="/single">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna
                            aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0
                            </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56
                            </a><a class="span_link" href="/single"><span
                                        class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--/footer-->
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