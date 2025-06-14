@extends('layouts.app')
@section('pageTitle', 'US Outsourcing Work -')
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
                <li><span>US Outsourcing Work</span></li>
            </ul>
            <h1>US Outsourcing Work</h1>
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
                    <div class="blogpage-title"><a href="">US Outsourcing Work</a></div>
                    <div class="blogpage-image">
                        <img data-src="images/blogpage-1.jpg" alt="" class="img-responsive lazyload"/>
                    </div>
                    <div class="excerpt">
                       <p class="mb-p"><strong>Business Tax</strong></p>
                       <p>As part of our Business Tax Services, we put together a custom corporate tax planning strategies and address any related tax issues prior to year-end. We’ll also review the most recent tax law changes and interpretations in order to maximize tax savings opportunities and reduce tax liability. With an effective business tax preparation plan, companies have greater assurance of realizing substantial cost savings, limiting interest and penalties and reducing the likelihood of IRS audits.</p>
                    </div>

                    <div class="excerpt">
                      <p class="mb-p"><strong>Individual Tax</strong></p>
                       <p>Our individual tax services help reduce tax liability and maximize after-tax cash flow. Our personal tax preparation services include tax return compliance, tax planning, and assistance with investment strategies.
                    </p>
                     </div>

                     <div class="excerpt">
                        <p class="mb-p"><strong>International  Tax</strong></p>
                        <p> Businesses that operate internationally face unique challenges of having the stay compliant with multiple countries’ tax rules and regulations. Our international tax advisors work with organizations to maintain tax transparency, remediate cross-border tax disputes, minimize the risk of double-taxation and achieve maximum savings through international tax incentives.
                        </p>

                     </div>


                     <div class="excerpt">
                       <p class="mb-p"><strong>State & Local Tax</strong></p>
                       <p>The complexity and persistent changes in state and local tax (SALT) laws and regulations can make it difficult for businesses to navigate. Our consultants can help with compliance of laws and regulations and manage risk.
                    </p>
                     </div>


                     <div class="excerpt">
                        <p class="mb-p"><strong>Audit Services</strong></p>
                        <p>Audits are performed based on a risk-based approach. We conduct our audits under the concept of “understanding the entity.” This concept is based fundamentally on the fact that your company’s business environment is unique. By understanding the company and the industry it operates in, we gain the necessary perspective for performing an effective and efficient audit.</p>
                      </div>

                      <div class="excerpt">
                        <p class="mb-p"><strong>Audit Preparedness</strong></p>
                       <p> We offer a great solution for companies that have never been audited. Our consultants work with the Company to ensure policies, procedures and documentation are properly set-up in order to successfully complete an audit.
                    </p>
                      </div>

                      <div class="excerpt">
                        <p class="mb-p"><strong>Agreed Upon Procedures</strong></p>
                     <p>Certain stakeholders such as lenders and partners require specific testing and assurance over certain subject matters. Our team will work with the company and it’s stakeholders to understand their needs and design appropriate procedures to ensure the goal is met.
                    </p>
                      </div>

                      <div class="excerpt">
                        <p class="mb-p"><strong>Internal Audit Services & SOX Compliance</strong></p>
                   <p> We can act as your internal audit service group by bringing a systematic and disciplined approach to risk management, control and governance processes. We use the COSO and COBIT frameworks to ensure controls are well designed, implemented and operating effectively.
                </p>
                      </div>


                      <div class="excerpt">
                        <p class="mb-p"><strong>Reviews & Compilations</strong></p>
                 <p>Review engagement services can be a cost-effective alternative to a full financial statement audit for an organization in that they provide limited assurance regarding the organization’s financial statements in accordance with the organization’s financial reporting framework. A compilation of a financial statement is not designed to provide assurance on the underlying financial statements. However, compiled financial statements present an economical way to report an organization’s financial performance and financial position at a high level.
                </p>
                      </div>

                      <div class="excerpt">
                        <p class="mb-p"><strong>Outsourced Accounting</strong></p>
             <p>Outsourcing bookkeeping service has become a new norm of handling the books of accounts. The reason being in house bookkeeping not only takes an ample amount of time but also is a tiresome activity. Especially for small or medium scale business, it takes space, time and costs that may better put in use for other business purposes.
            </p>
                      </div>

                      <div class="excerpt">
                        <p class="mb-p"><strong>SEC Reporting </strong></p>
             <p> We can set-up the financial reporting structure for Companies going public or assist with public companies that don’t have the resources to mage their SEC reporting. We prepare accounting materials and financial information to support regulatory and management reporting, as well as board meeting requirements. In addition, we can prepare or help with the preparation of SEC filings, such as quarterly, annual reports, proxy statements, and earnings releases. We also design and implement reporting processes and internal frameworks to support your regulatory requirements.
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
