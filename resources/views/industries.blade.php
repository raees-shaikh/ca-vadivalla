@extends('layouts.app')
@section('pageTitle', 'Industries -')
@section('content')


<!-- page Header -->
<div class="page-header wow fadeInUp">
    <div class="container">
        <div class="page-header-inner">
            <ul class="clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><span>></span></li>
                <li><span>Industries</span></li>
            </ul>
            <h1>Industries</h1>
        </div>
    </div>
</div>
<!-- End page Header -->


<!-- Afterbout -->
<div id="afterbout-section" class="wow fadeInDown">
    <div class="container">
        <div class="afterbout-inner custom-industry-inner">
            <div class="text-center">
                {{-- <div class="section-main-title">
                    <i>Something About Us</i>
                    WELL ORGANIZED<span>.</span> TRUSTED BY THOUSANDS<span>.</span>
                </div> --}}
                {{-- <div class="excerpt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                        convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                    </p>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-history"></i>
                    </div>
                    <h4>Construction Accounts and Advisors</h4>
                    <p>
                        D H Vadivalla & Co  has extensive experience serving the tax, business planning and consulting needs of clients with varying business structures. We serve a wide variety of real estate clients ranging from commercial, residential and retail developers.
                    </p>
                    <a href="construction-accounts" class="btn btn-more industries-btn">Read More</a>

                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-earth"></i>
                    </div>
                    <h4>Education</h4>
                    <p>
                        D H Vadivalla & Co is committed to meeting the needs of educational institutions. Whether it’s working with management or Board of Trustees members, our dedicated accounting professionals will assist you in navigating issues related to financial reporting, tax-exempt status and grant compliance.
                    </p>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-calendar-full"></i>
                    </div>
                    <h4>Financial Services</h4>
                    <p>
                        Financial Service organizations are operating in a challenging environment, where maintaining a competitive foothold and remaining compliant are vital. Our professionals are industry experts who go beyond the typical tax and audit functions to find unique ways to improve your overall operational efficiencies.
                    </p>
                </div>
            </div>

            <div class="row indus-padd">
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-history"></i>
                    </div>
                    <h4>Government</h4>
                    <p>
                        We apply various strategies and business-consulting services tailored to your specific needs, including Governmental audits in accordance  ICAI and Government Audit Standards Fraud prevention
                    </p>
                    <a href="government" class="btn btn-more industries-btn">Read More</a>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-earth"></i>
                    </div>
                    <h4>Healthcare</h4>
                    <p>
                        Our dedicated Healthcare Facilities Group is highly qualified to provide audit & assurance services, as well as implement services for your organization to help you thrive.
                    </p>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-calendar-full"></i>
                    </div>
                    <h4>Manufacturing </h4>
                    <p>
                        D H Vadivalla & Co understands the pressure within the industry to manage production, operate efficiently and compete in an increasingly competitive global marketplace.
                    </p>
                    <a href="manufacturing" class="btn btn-more">Read More</a>
                </div>
            </div>

            <div class="row indus-padd">
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-history"></i>
                    </div>
                    <h4>Non-Profits</h4>
                    <p>
                        At D H Vadivalla & Co, we understand We help you look beyond the numbers and provide your organization with valuable recommendations in accounting, auditing and assurance compliance.
                    </p>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-earth"></i>
                    </div>
                    <h4>Retail & Consumer Sector</h4>
                    <p>
                        At D H Vadivalla & Co, our professionals know how to successfully predict these unforeseen changes, while enabling you to overcome challenges such as demanding competition and increasing technological change.
                    </p>
                    <a href="retail-consumer" class="btn btn-more industries-btn">Read More</a>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-calendar-full"></i>
                    </div>
                    <h4>Technology </h4>
                    <p>
                        D H Vadivalla & Co has understand the complex issues executives face in technology industry, no matter the life cycle stage, our professionals possess the experience to assist—from tax planning and compliance to audit and assurance services
                    </p>
                    <a href="technology" class="btn btn-more">Read More</a>
                </div>
            </div>

            <div class="row indus-padd">
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-history"></i>
                    </div>
                    <h4>Logistics</h4>
                    <p>
                        Transporting products and raw materials are the heartbeat of Indian industry. Our knowledge of the issues and regulations unique to the transport industry is unsurpassed.
                    </p>
                    <a href="logistic" class="btn btn-more industries-btn">Read More</a>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-earth"></i>
                    </div>
                    <h4>Media & Entertainment</h4>
                    <p>
                        We are leading specialists for every accounting need of the media and entertainment industry. We understand and appreciate the very special nature of the industry.
                    </p>
                    <a href="media-entertainment" class="btn btn-more">Read More</a>
                </div>

            </div>
            {{-- <div class="text-center">
                <a href="" class="btn btn-more">LEARN MORE</a>
            </div> --}}

        </div>
    </div>
</div>
<!-- End Afterbout -->




<style>
    .industries-link a:after{
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
