@extends('layouts.app')
@section('pageTitle', 'Services for Non-Residents -')
@section('content')


 <!-- page Header -->
 <div class="page-header wow fadeInUp">
    <div class="container">
        <div class="page-header-inner">
            <ul class="clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><span>></span></li>
                <li><span>Services</span></li>
                <li><span>></span></li>
                <li><span>Services for Non-Residents</span></li>
            </ul>
            <h1>Services for Non-Residents</h1>
        </div>
    </div>
</div>
<!-- End page Header -->

<!-- services detail -->
<div id="blogpage-section" class="wow fadeInDown servicespage">
    <div class="container">
        <div class="blogpage-inner service-inner-padd">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    {{-- <div class="blogpage-small-title">Sallary Management</div> --}}
                    <div class="blogpage-title"><a href="">Services for Non-Residents</a></div>
                    <div class="blogpage-image">
                        <img data-src="images/blogpage-1.jpg" alt="" class="img-responsive lazyload"/>
                    </div>
                    <div class="excerpt">
                        <p>
                            <ul class="srv-det-list">
                               <li>Tax planning.</li>
                               <li>Obtaining Advance Rulings on debatable issues.</li>
                               <li>Obtaining Lower rate TDS Certificate</li>
                               <li>Consultancy/ advice on FEMA/RBI matters.</li>
                               <li>Filing Income Tax/ Wealth Tax Returns</li>
                               <li>Advice on making investments</li>
                               <li>Issuing certificate for repatriation of income / assets from India.</li>
                               <li>Making application to RBI for various matters including sale and purchase of residential and commercial properties.</li>
                            </ul>
                        </p>

                    </div>

                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="sidebar">
                        <div class="rel-serv">
                            <div class="widget-title">Related Service</div>
                            <ul>
                                <li>
                                    <a href="audit-assurance">Audit & Assurance</a>
                                </li>
                                <li>
                                    <a href="income-tax">Income Tax</a>
                                </li>
                                <li>
                                    <a href="good-services-tax">Goods And Services Tax</a>
                                </li>
                                <li>
                                    <a href="risk-advisory-services">Risk Advisory Services</a>
                                </li>
                                <li>
                                    <a href="services-non-resident">Services For Non-Residents</a>
                                </li>
                                <li>
                                    <a href="outsourcing-non-resident">Outsourcing for International Corporates</a>
                                </li>
                                <li>
                                    <a href="us-outsourcing-work">US Outsourcing Work</a>
                                </li>
                            </ul>
                        </div>


                        {{-- <div class="form-request">
                            <div class="section-main-title">
                                <i>Free Estimation</i>
                                REQUEST A QUOTE
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fname" placeholder="Full Name / Company Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="femail" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fnumb" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="emp" placeholder="Number of Employees">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Vat Complaince</option>
                                        <option>Vat Complaince 2</option>
                                        <option>Vat Complaince 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inv" placeholder="Number of Incoming Invoices">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="invo" placeholder="Number of Outgoing Invoices">
                                </div>
                                <button type="submit" class="btn btn-more">GET A QUOTE</button>
                            </form>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end services detail -->

<!-- Quote -->
<div class="quote-section wow fadeInDown">
    <div class="container">
        <div class="quote-inner quote-custom-inner">
            <div class="row clearfix">
                <div class="col-md-8 col-xs-12">
                    <div class="section-main-title req-quote-title">
                        <a href="" class="clearfix">
                            <i>Free Estimate </i>
                            <span>Request a Quote</span><b class="lnr lnr-arrow-right"></b>
                        </a>
                    </div>
                    <p>Please state what you want and let us redefine conventional accounting solutions.</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="text-center get-quote-btn">
                        <a href="contact" class="btn btn-more">Get A QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quote -->



<style>
    .service-link a:after{
        content: '';
        position: absolute;
        bottom: 0;
        height: 1px;
        width: 100%;
        background: #9f8447;
        left: 0;
        transition: all 0.25s ease-out;
    }
</style>
@endsection
