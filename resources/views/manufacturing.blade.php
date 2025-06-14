@extends('layouts.app')
@section('pageTitle', 'Manufacturing -')
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
                <li><span>Manufacturing</span></li>
            </ul>
            <h1>Manufacturing</h1>
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
                        Manufacturing
                    </div>
                    <div class="excerpt">
                        <p>
                            D H Vadivalla & Co understands the pressure within the industry to manage production, operate efficiently and compete in an increasingly competitive global marketplace. We can help identify and implement strategies designed to keep your operations moving profitably and efficiently.                        <p>
                        <p>
                        <p>
                            Decades of experience combined with our active participation in relevant industry associations ensures that our industry specialists are well-versed on the manufacturing issues your company faces. Our dedication to your success is demonstrated through guidance and consultation on:
                        </p>
                        <p>
                            <ul class="srv-det-list">
                                <li>Inventory management, optimization and planning</li>
                                <li>Cash flow forecasting</li>
                                <li>Business process improvements</li>
                                <li>Internal Audit & Assurance with government Compliance</li>
                                <li>Income tax planning tailored to manufacturers and distributors</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <p>
                        <ul class="srv-det-list">
                            <li>Inventory management, optimization and planning</li>
                            <li>Cash flow forecasting</li>
                            <li>Business process improvements</li>
                            <li>Internal Audit & Assurance with government Compliance</li>
                            <li>Income tax planning tailored to manufacturers and distributors</li>
                        </ul>
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
</div>


@endsection

