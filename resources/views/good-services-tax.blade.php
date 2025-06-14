@extends('layouts.app')
@section('pageTitle', 'Goods & Services Tax -')
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
                <li><span>Goods & Services Tax</span></li>
            </ul>
            <h1>Goods & Services Tax</h1>
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
                    <div class="blogpage-title"><a href="">Goods & Services Tax</a></div>
                    <div class="blogpage-image">
                        <img data-src="images/blogpage-1.jpg" alt="" class="img-responsive lazyload"/>
                    </div>
                    <div class="excerpt">
                        <p>
                            Goods and Services Tax (GST) is one of the biggest tax reforms introduced in the history of Indian fiscal evolution. The all-pervasive impact of GST on a company’s services, material and product costs, cash flow, profitability and, ultimately, shareholder value is an important element that requires careful attention in a competitive world of fine margins.
                        </p>
                        <p>
                        We at D H Vadivalla  Co are closely involved in monitoring the developments on GST. We help businesses anticipate policy changes and assess their impact on operations, offering a host of specialized GST-related services such as:
                        </p>
                        <p><strong>Advisory</strong></p>
                        <p>
                            <ul class="srv-det-list">
                                <li>Advising on applicability of taxes on various transactions being undertaken and envisaged by the business.</li>
                                <li>Advising on issues related to classification, valuation, place of supply, admissibility of tax benefits and exemptions.</li>
                                <li>Opinions on regular and technical tax issues faced by businesses.</li>
                                <li>Undertaking a comprehensive review of the business operations to identify tax optimization opportunities and compliance gaps.</li>
                                <li>Conducting detailed indirect tax due diligence.</li>
                                <li>Review of each business process and systems and prepare detailed SOP.</li>
                                <li>Review of existing GST infrastructure and revalidate the correctness of stand taken by the business with respect to GST implication on various transactions.</li>
                            </ul>
                        </p>
                        <p><strong>Compliance assistance (Retainership) and Outsourcing</strong></p>
                        <p>
                            <ul class="srv-det-list">
                                <li>Managing all GST compliances on PAN-India basis.</li>
                                <li>Extensive control checks ensuring accuracy and completeness of data and exhaustive validation checks for return finalization.</li>
                                <li>Assistance in periodic computation of tax liabilities and eligible Input Tax credits.</li>
                                <li>Assistance in preparing and filing periodic return(s) and refund claims.</li>
                                <li>Assistance in obtaining/amending Indirect Tax registrations, as may be required.</li>
                            </ul>
                        </p>
                        <p><strong>Litigation assistance</strong></p>
                        <p>
                            <ul class="srv-det-list">
                                <li>Assistance in drafting replies to notices, enquiries and other such communications received from revenue/ assessing authorities.</li>
                                <li>Representing matters before the appropriate authorities including tribunals and engaging an external legal counsel, if required.</li>
                                <li>Filing advance ruling application with the authorities to seek clarification on ambiguous matters.</li>
                            </ul>
                        </p>

                        <p><strong>Audit</strong></p>
                        <ul class="srv-det-list">
                            <li>Review of data collated and reconciliations prepared.</li>
                            <li>Assistance in preparation and filling of GST annual returns and audit report.</li>
                            <li>Guidance in the collation of documents and information required to file an annual return and audit report.</li>
                        </ul>

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
