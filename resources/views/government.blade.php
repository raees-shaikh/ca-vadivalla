@extends('layouts.app')
@section('pageTitle', 'Government -')
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
                <li><span>Government</span></li>
            </ul>
            <h1>Government</h1>
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
                        Government
                    </div>
                    <div class="excerpt">
                        <p>
                            We apply various strategies and business-consulting services tailored to your specific needs, including:                        </p>
                        <p>
                        <p>
                            <ul class="srv-det-list">
                                <li>Governmental audits in accordance  ICAI and Government Audit Standards Fraud prevention and internal controls</li>
                                <li>Compliance requirements related to grants and cooperative agreements</li>
                                <li>General accounting, budget and reconciliation assistance</li>
                                <li>Operational policies and procedures analysis</li>
                                <li>Financial statement preparation for non-attest clients</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

