@extends('layouts.app')
@section('pageTitle', 'Logistics -')
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
                <li><span>Logistics</span></li>
            </ul>
            <h1>Logistics</h1>
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
                        Logistics
                    </div>
                    <div class="excerpt">
                        <p>
                            Transporting products and raw materials are the heartbeat of Indian industry. Our knowledge of the issues and regulations unique to the transport industry is unsurpassed.
                        </p>
                        <p>
                            The Transportation Group includes assurance, tax, technology and management consulting professionals who combine their individual expertise to serve our wide range of transportation and logistics clients.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

