@extends('layouts.app')
@section('pageTitle', 'Technology -')
@section('content')

 <!-- page Header -->
 <div class="page-header wow fadeInUp">
    <div class="container">
        <div class="page-header-inner">
            <ul class="clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><span>></span></li>
                <li><a href="{{route('industries')}}">Industries</a></li>
                <li><span>></span></li>
                <li><span>Technology</span></li>
            </ul>
            <h1>Technology</h1>
        </div>
    </div>
</div>
<!-- End page Header -->

<!-- before-services -->
<div id="bservices-section" class="wow fadeInDown">
    <div class="container">
        <div class="bservices-inner">
            <div class="row">
                <div class="col-lg-6">
                    <img class="industries-img lazyload" data-src="images/porto-1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="section-main-title industries-inner-title">
                        Technology
                    </div>
                    <div class="excerpt">
                        <p>
                            D H Vadivalla & Co has understand the complex issues executives face in technology industry, no matter the life cycle stage, our professionals possess the experience to assist—from tax planning and compliance to audit and assurance services to specialized consulting. Whether it’s structuring your business, recognizing revenue, evaluating the most beneficial tax structure
                            domestically and internationally, capturing tax credits and incentives, or making introductions to potential funding sources.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

