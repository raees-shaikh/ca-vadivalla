@extends('layouts.app')
@section('pageTitle', 'Retail & Consumer Sector -')
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
                <li><span>Retail & Consumer Sector</span></li>
            </ul>
            <h1>Retail & Consumer Sector</h1>
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
                        Retail & Consumer Sector
                    </div>
                    <div class="excerpt">
                        <p>
                            At D H Vadivalla & Co, our professionals know how to successfully predict these unforeseen changes, while enabling you to overcome challenges such as demanding competition and increasing technological change.
                        </p>
                        <p>
                            We formulate ways to take advantage of the opportunities that these challenges present while avoiding potential pitfalls. Whether it’s organizing systems, obtaining financing, minimizing taxes or staying compliant with accounting requirements.
                        </p>
                        <p>
                            D H Vadivalla & Co team have worked closely with a range of retail establishments, restaurants, hotels, food wholesalers, franchise operators, dealership and automotive manufacturers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

