@extends('layouts.app')
@section('pageTitle', 'Construction Accounts and Advisors -')
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
                <li><span>Construction Accounts and Advisors</span></li>
            </ul>
            <h1>Construction Accounts and Advisors</h1>
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
                        Construction Accounts and Advisors
                    </div>
                    <div class="excerpt">
                        <p>
                            D H Vadivalla & Co  has extensive experience serving the tax, business planning and consulting needs of clients with varying business structures. We serve a wide variety of real estate clients ranging from commercial, residential and retail developers.
                        </p>
                        <p>
                            Real estate developers and investors need access to the most current information about regulatory changes as per RERA Act. D H Vadivalla & Co can help you discover the options that are available to you and implement planning strategies to make the most of your investment. We have a dedicated team of specialty tax experts to assist you with planning and structuring your next project to leverage tax incentives,. We can help you determine if you are taking advantage of every tax savings opportunity that’s available to you.                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
