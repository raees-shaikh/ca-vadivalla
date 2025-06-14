@extends('layouts.app')
@section('pageTitle', '')
@section('content')


    <!-- Slider -->
    <div id="slider-section" class="wow fadeInUp">
        <div class="home-slider-nav clearfix">
            <button type="button" class="home-prev slick-arrow left"><i class="fa fa-chevron-left"></i></button>
            <button type="button" class="home-next slick-arrow right"><i class="fa fa-chevron-right"></i></button>
        </div>
        <div id="home-slider">
            <div class="item">
                <img src="images/slider/slider-1.jpg" alt="" class="img-responsive desk-display-slider slier-width" />
                <img src="images/slider/mob-banner-1.jpg" alt="" class="img-responsive mob-display-slider" />

                {{-- <div class="slide-desc">
                <div class="container">
                <div class="left">
                        <div class="slide-desc-item slider-content-mt">
                            <div class="section-main-title">
                                D. H. VADIVALLA
                            </div>
                            <div class="excerpt excerpt-custom">
                                <p class="slier-p">
                                    A step above conventional accounting.
                                </p>
                            </div>
                            <a href="about" class="btn btn-more">About Us</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> --}}
            </div>
            <div class="item">
                <img src="images/slider/slider-2.jpg" alt="" class="img-responsive desk-display-slider slier-width" />
                <img src="images/slider/mob-banner-2.jpg" alt="" class="img-responsive mob-display-slider" />

                {{-- <div class="slide-desc">
                <div class="container">
                    <div class="left">
                        <div class="slide-desc-item slide-desc-item-custom">
                            <div class="section-main-title slider-title-mob">
                                ACCOUNTING<br/>DONE RIGHT FAST
                            </div>
                            <div class="excerpt excerpt-custom">
                                <p class="slier-p">
                                    Accounting solutions with trust and accuracy.
                                </p>
                            </div>
                            <a href="{{route('audit-assurance')}}" class="btn btn-more">Our Services</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> --}}
            </div>
            {{-- <div class="item">
            <img src="images/slide-2.jpg" alt="" class="img-responsive" />
            <div class="slide-desc">
                <div class="container">
                    <div class="right">
                        <div class="slide-desc-item">
                            <div class="section-main-title">
                                <i>Something about us</i>
                                ACCOUNTING<br/>DONE<span>.</span>RIGHT<span>.</span>FAST
                            </div>
                            <div class="excerpt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent
                                    esque dignissim eros a sapien tempus, ut eleifend neque
                                    convallis. Duis ac ligula nec sem fringilla.
                                </p>
                            </div>
                            <a href="" class="btn btn-more">ASK QUOTE</a><a href="" class="btn btn-bordered">ASK QUOTE</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div> --}}
        </div>
        {{-- <div class="container">
        <a href="#booking-section" class="button-to-book">+</a>
        <div class="clearfix"></div>
    </div> --}}
    </div>
    <!-- End Slider -->


    <!-- About -->
    <div id="about-section">
        <div class="container">
            <div class="about-inner about-pb">
                <div class="row nomarg">
                    <div class="col-md-6 col-xs-6 nopad wow fadeInLeft">
                        <div class="section-main-title">
                            <i>Something about us</i>
                            WELL ORGANIZED<span>.</span><br />
                            TRUSTED BY THOUSANDS<span>.</span>
                        </div>
                        <div class="excerpt">
                            <p>D H Vadivalla & Co. is a Chartered Accountant firm providing Audit, Tax, Advisory and
                                assurance services to businesses.</p>
                            <p>Founded in 1982 by CA Dinesh H Vadivalla has established itself as a reputable and dependable
                                financial associate, working with companies and corporations from diverse sectors including,
                                - Logistics, Investment Banking, Banking & NBFC, Real Estate, Healthcare, Hospitality, Media
                                & Entertainment, Manufacturing, & Trading, Information Technology, and Other Services.</p>
                            <div class="clearfix"></div>
                            <div class="step">
                                <div class="step-inner">
                                    <div class="row clearfix">
                                        <div class="col-md-4 col-xs-4 step-item">
                                            <div class="step-ct">
                                                <img class="lazyload" data-src="images/ico-check.png" alt="">
                                                <p class="ab-step-p">
                                                    ONTIME EVERYTIME<br />at service
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4 step-item">
                                            <div class="step-ct">
                                                <img class="lazyload" data-src="images/ico-pin.png" alt="">
                                                <p class="ab-step-p">
                                                    Available at your<br />location
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4 step-item">
                                            <div class="step-ct">
                                                <img class="lazyload" data-src="images/ico-calendar.png" alt="">
                                                <p class="ab-step-p">
                                                    One to One <br /> Interaction
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <a href="about" class="btn btn-bordered">Read More</a>

                    </div>
                    <div class="col-md-6 col-xs-6 nopad wow fadeInRight">
                        <div class="about-featured-img">
                            <div class="row marg-10">
                                <div class="col-md-6 col-xs-6 ab-col-mob pad-10">
                                    <div class="about-featured-img-item ab-img-display-mob">
                                        <img data-src="images/ft-1.png" alt="" class="img-responsive lazyload" />
                                        <img data-src="images/ft-2.png" alt="" class="img-responsive ab-img-ml lazyload" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6 ab-col-mob pad-10 ">
                                    <div class="about-featured-img-item push-down ab-img-display-mob">
                                        <img data-src="images/ft-3.png" alt="" class="img-responsive lazyload" />
                                        <img data-src="images/ft-4.png" alt="" class="img-responsive ab-img-ml lazyload" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Services -->
    <div id="services-section" class="wow fadeInDown">
        <div class="row nomarg">
            <div class="col-md-4 col-xs-4 nopad services-item">
                <div class="services-ct">
                    <i class="lnr lnr-briefcase"></i>
                    <div class="title">
                        {{-- <i>Area of Work</i> --}}
                        Income Tax
                    </div>
                    <div class="services-excerpt service-excerpt-custom">
                        {{-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Pellent esque dignissim eros a sapien tempus,
                        ut eleifend neque convallis.
                    </p> --}}
                        <ul class="area-work">
                            <li>Returns – Individual, LLP , LLC, Corporation, Partnership</li>
                            <li>Audit – Partnership, Corporation, LLP</li>
                            <li>Tax advisory</li>
                        </ul>
                    </div>
                    {{-- <a href="services-detail.html" class="btn btn-bordered">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-4 col-xs-4 nopad services-item">
                <div class="services-ct area-audit">
                    <i class="lnr lnr-apartment"></i>
                    <div class="title">
                        {{-- <i>Area of Work</i> --}}
                        Audit
                    </div>
                    <div class="services-excerpt service-excerpt-custom">
                        <ul class="area-work">
                            <li>Corporation Internal and Statutory Audit</li>
                            <li>Partnership , LLP, LLC Internal and Statutory Audit</li>
                            <li>Bank Audit</li>
                            <li>Charitable Trust and Schools Internal Audit</li>
                        </ul>
                    </div>
                    {{-- <a href="services-detail.html" class="btn btn-bordered">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-4 col-xs-4 nopad services-item">
                <div class="services-ct area-audit">
                    <i class="lnr lnr-pencil"></i>
                    <div class="title">
                        {{-- <i>Area of Work</i> --}}
                        Consultancy
                    </div>
                    <div class="services-excerpt service-excerpt-custom">
                        <ul class="area-work">
                            <li>Risk Advisory</li>
                            <li>Financial Consultancy, CMA Reports</li>
                            <li>Private Equity Fund Consultancy</li>
                            <li>Legal & Arbitration Consultancy</li>
                        </ul>
                    </div>
                    {{-- <a href="services-detail.html" class="btn btn-bordered">Learn More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->



    <!-- Hblog -->
    {{-- <div id="home-blog-section" class="wow fadeInUp">
    <div class="container">
        <div class="home-blog-inner">
            <div class="row">
                <div class="col-md-4 col-xs-4">
                    <div class="section-main-title">
                        <i>Whats going on</i>
                        LATEST NEWS & <br/>UPDATES
                    </div>
                    <div class="excerpt">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque convallis.
                        </p>
                    </div>
                    <a href="" class="btn btn-bordered">Read More</a>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="home-blog-ct">
                        <div class="home-blog-featured-images">
                            <a href=""><img src="images/hblog-1.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="home-blog-title">
                            <h5><a href="">just been moved to my new office</a></h5>
                        </div>
                        <div class="meta-date">
                            Aug 12, 2015   In : <a href="">Accounting</a>
                        </div>
                        <a href="" class="more">READ MORE <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="home-blog-ct">
                        <div class="home-blog-featured-images">
                            <a href=""><img src="images/hblog-2.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="home-blog-title">
                            <h5><a href="">just been moved to my new office</a></h5>
                        </div>
                        <div class="meta-date">
                            Aug 12, 2015   In : <a href="">Accounting</a>
                        </div>
                        <a href="" class="more">READ MORE <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- End Hblog -->




    <!-- Afterbout -->
    <div id="afterbout-section" class="wow fadeInDown">
        <div class="container">
            <div class="afterbout-inner custom-afterbout-inner">
                <div class="text-center">
                    <div class="section-main-title">
                        {{-- <i>Something About US</i> --}}
                        Industries
                    </div>
                    <div class="excerpt">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-4 afterbout-item">
                        <div class="afterbout-icon">
                            <i class="lnr lnr-history"></i>
                        </div>
                        <h4>Construction Accounts and Advisors</h4>
                        <p>
                            D H Vadivalla & Co has extensive experience serving the tax, business planning and consulting
                            needs of clients with varying business structures. We serve a wide variety of real estate
                            clients ranging from commercial, residential and retail developers.
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-4 afterbout-item">
                        <div class="afterbout-icon">
                            <i class="lnr lnr-earth"></i>
                        </div>
                        <h4>Education</h4>
                        <p>
                            D H Vadivalla & Co is committed to meeting the needs of educational institutions. Whether it’s
                            working with management or Board of Trustees members, our dedicated accounting professionals
                            will assist you in navigating issues related to financial reporting, tax-exempt status and grant
                            compliance.
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-4 afterbout-item">
                        <div class="afterbout-icon">
                            <i class="lnr lnr-calendar-full"></i>
                        </div>
                        <h4>Financial Services</h4>
                        <p>
                            Financial Service organizations are operating in a challenging environment, where maintaining a
                            competitive foothold and remaining compliant are vital. Our professionals are industry experts
                            who go beyond the typical tax and audit functions to find unique ways to improve your overall
                            operational efficiencies.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="industries" class="btn btn-more">LEARN MORE</a>
                    {{-- <a href="" class="btn btn-bordered">BOOK NOW</a> --}}
                </div>

            </div>
        </div>
    </div>
    <!-- End Afterbout -->


    <!-- Facts -->
    {{-- <div id="fact-section" class="wow fadeInDown">
    <div class="container">
        <div class="fact-inner">
            <div class="text-center">
                <div class="section-main-title">
                    <i>Some Cool Facts</i>
                    WHY YOU SHOULD CHOOSE ME
                </div>
                <div class="excerpt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                        convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4 fact-item">
                    <div class="fact-ct">
                        <i class="lnr lnr-clock"></i>
                        <h4>HARD WORKING<span>.</span><br/>& ALWAYS ON TIME<span>.</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adi
                            elit. Pellent esque dignissim eros a sapien ut eleifend neque convallis.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 fact-item">
                    <div class="fact-ct">
                        <i class="lnr lnr-thumbs-up"></i>
                        <h4>Satisfaction<br/>Guaranteed always<span>.</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adi
                            elit. Pellent esque dignissim eros a sapien ut eleifend neque convallis.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 fact-item">
                    <div class="fact-ct">
                        <i class="lnr lnr-pie-chart"></i>
                        <h4>INternational<span>.</span><br/>& local accounting<span>.</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adi
                            elit. Pellent esque dignissim eros a sapien ut eleifend neque convallis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- End Facts -->

    {{-- <!-- Client -->
<div id="client-section" class="wow fadeInUp">
    <div class="container">
        <div class="client-inner">
            <div class="text-center">
                <div class="section-main-title">
                    <i>Awesome Clients</i>
                    SOME OF COOL CLIENTS
                </div>
                <div class="excerpt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                        convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                    </p>
                </div>
            </div>
            <div class="row client nomarg clearfix">
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-1.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-2.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-3.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-4.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-5.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-6.png" alt="" /></a>
                </div>
            </div>
            <div class="row client nomarg clearfix">
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-7.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-8.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-6.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-3.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-1.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img src="images/c-4.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Client --> --}}

    <!-- Testimonial -->
    <div id="testimonial-section" class="wow fadeInUp">

        <div class="container">
            <div class="row nomarg">
                <div class="col-md-8 col-xs-8 nopad">
                    <div class="testimonial-wrap custom-testimonial-wrap">
                        <div class="testimonial-inner">
                            <div class="testimonial-to-right">
                                <div class="section-main-title testimonial-title">
                                    <i>Testimonials</i>
                                    WHAT PEOPLE SAY
                                </div>
                                <div class="testimonial-nav">
                                    <button type="button" class="slick-prev"><i class="lnr lnr-arrow-left"></i></button>
                                    <button type="button" class="slick-next"><i class="lnr lnr-arrow-right"></i></button>
                                </div>
                                <div class="clearfix"></div>
                                <div id="testimonial-slider" class="testimonial-slider-mb">

                                    <div class="testimonial-item">
                                        <p>We appreciate D H Vadivalla & Co for continued support and guidance on Income Tax
                                            and VAT & GST matters . We value your personalized attention at all times .
                                            Considering the complexity of Income Tax and GST and frequent changes in
                                            compliance , your team is conceptually sound and has always delivered practical
                                            approach for Income Tax , VAT & GST compliance. The team is very professional,
                                            accessible and has quick turnaround time. </p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, ParekhEngimech, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co is doing our Audit and Income Tax compliance from almost 1
                                            decade, till date their support and professionalism is highly appreciable. D H
                                            Vadivalla & Co team has always given quality output in all the assignments ,
                                            which is commendable , Services provided by D H Vadivalla & Co team is well
                                            structured as they have taken care of our needs. We would like to thanks D H
                                            Vadivalla & Co entire team for a very thorough and comprehensive analysis of our
                                            firm Audit and Income Tax compliance.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, Nivaran Diagnostic Center Pvt Ltd, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>We are engaged with D H Vadivalla & Co for more than 3 decade for Audit and
                                            Income Tax work of our company , till date their support and professionalism is
                                            highly appreciable. Throughout the period , we have received the direct and
                                            personal attention of their Mr Dinesh H Vadivalla, together with his team to
                                            address our specific issue and concerns .They have regularly kept us abreast of
                                            latest developments to ensure our compliance with laws at all times. Their
                                            proactive engagement with tax authorities ensured a quick and timely closure of
                                            the assessment proceedings.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, Flameproof Equipments Pvt Ltd, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co has generally been good with their support , assistance and
                                            guidance . They have in -depth knowledge and acumen in Audit , Income Tax and
                                            GST practice. They have practical approach to problem solving and they are
                                            backed by good supportive team. We can recommend their high quality and
                                            professional work.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                CEO & Partner, Electrocare Industries , India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>It was considered necessary to engage with D H Vadivalla & Co services in the
                                            areas of understanding the procedure of Income Tax and providing assistance to
                                            prepare and submit the complete set of case papers to tax authorities ,
                                            representing the company at the interaction with the authorities and providing
                                            necessary legal clarification and providing prompt response to queries raised.
                                            We are glad to observe that we have received professional and competent services
                                            especially in sector of Media and Entertainment business . We are pleased to
                                            convey our appreciation to D H Vadivalla & Co team for the services rendered by
                                            them, during the engagement.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, 108 Production Inc, NY USA
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>We have had very good experience working with D H Vadivalla & Co . The team is
                                            extremely professional , technically very sound and team members are always
                                            available for any inputs and advice.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, WWT India Pvt Ltd, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co, Professional and skilled organization and have expertise in
                                            Income Tax and GST Compliance .The team has professional acumen and
                                            understanding , is always present with valuable input services .</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                CEO, SP & SC Finance Pvt Ltd, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co has associated with us since last 2 decade . This firm prompt
                                            service in Income tax ,Audit and GST . D H Vadivalla & Co has good blend of team
                                            resources with ensures that professional services of high standards is provided
                                            to client promptly. We appreciate prompt professional services provided by the
                                            firm.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, Sara Exports, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>Has been associated with the D H Vadivalla & Co for last 3 decade , and are more
                                            happy to associate with them. The team has only improved over time and we
                                            appreciate prompt professional services provided by the firm.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                CEO Scan Décor, India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co is doing our arbitration matter assignment work past few years
                                            , till date their support and professionalism is highly appreciable. D H
                                            Vadivalla & Co team has always given quality output in our all assignment ,which
                                            is commendable. We are very pleased with the quality of services and team is
                                            well structured as they have taken care of our needs.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, Vyas & Bhalwal Advocate , India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>It been nearly 3 decade since we started working together and it was probably one
                                            of the best decision I have ever made Professionalism, honesty, dedication
                                            making its happen , never saying no to anything and finding solutions , thinking
                                            out of the box , and most important being treated as family is what is got from
                                            working with you and your team.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Chairman, Power & Control , India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co professional and skilled organization and have expertise in
                                            audit and tax issues. The team has professional acumen and understanding is
                                            always present with extraordinary services.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, Scan Enterprise , India
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <p>The firm is know through the owner and I have good experience working with Mr
                                            Dinesh H Vadivalla , He have good knowledge of audit and taxation issue further
                                            we are associated with firm has 2 decade and further D H Vadivalla & Co team
                                            gone extra mile to ensure that our work and compliance get completed on time.
                                        </p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                CEO, Partner Shreeji Engineering Works
                                                {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="testimonial-item">
                                        <p>We have been associated with D H Vadivalla & Co since last two year for
                                            professional services
                                            rendering to us . The kind of support and Pro activeness in completing
                                            assignments is absolutely
                                            best. Team of D H Vadivalla & Co is well updated with every new changes in tax
                                            law which give us
                                            an edge to be fully compliant with law. </p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Partner, BDO India LLP, India {{-- <span>Founder of Theme Designer</span> --}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="testimonial-item">
                                        <p>The company and the family have been clients of the D H Vadivalla & Co firm for
                                            over 30 years
                                            and we really appreciate the personal service we get from Dinesh H Vadivalla and
                                            his team.
                                            They are always available and approachable. Between them they always deal
                                            directly with my
                                            problems. They are often the first professional we turn to when we are looking
                                            at something
                                            new. </p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Chairman, Shreeji Engineering Enterprises, India
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="testimonial-item">
                                        <p>D H Vadivalla & Co has assisted us over the years in keeping to the various
                                            deadlines that
                                            businesses need to keep to. He has advised and assisted us with tax and business
                                            planning ideas.
                                            I would highly recommend D H Vadivalla & Co and his team.</p>
                                        <div class="clearfix"></div>
                                        <div class="testimonial-name">
                                            {{-- <div class="left">
                                            <img src="images/t-1.jpg" alt="" class="img-responsive">
                                        </div> --}}
                                            <div class="left name">
                                                Director, Labdhi Electrocare Ltd, India
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        {{-- <div class="interest">
                        <div class="testimonial-to-right">
                            <div class="interest-item">
                                <div class="left">
                                    <div class="int-img">
                                        <img src="images/int-1.png" alt=""/>
                                    </div>
                                </div>
                                <div class="left">
                                    <div class="section-main-title">
                                        <a href="">
                                            <i>Awesome Features</i>
                                            GREAT! I WANT TO BUY BOOK ME NOW <span class="lnr lnr-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
                <div>
                    <div class="col-md-4 col-xs-4 nopad" id="quote">
                        <div class="form-request custom-form-request">
                            <div class="testimonial-inner">
                                <div class="section-main-title testimonial-title">
                                    {{-- <i>Free Estimation</i> --}}
                                    REQUEST A QUOTE
                                </div>
                                <form action="{{ route('submit.quote') }}" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <!-- <div class="alert alert-danger"> -->
                                        <!-- <ul> -->
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        <!-- </ul> -->
                                        <!-- </div> -->
                                    @endif
                                    {{-- @if (\Session::has('success'))
                                <!-- <div class="alert alert-success"> -->
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                <!-- </div> -->
                            @endif
                            @if (\Session::has('error'))
                                <!-- <div class="alert alert-danger"> -->
                                    <ul>
                                        <li>{!! \Session::get('error') !!}</li>
                                    </ul>
                                <!-- </div> -->
                            @endif --}}
                                    <div class="form-group">
                                        <input name="name" value="{{ old('name') }}" minlength="3" maxlength="60"
                                            type="text" class="form-control" id="fname"
                                            placeholder="Full Name / Company Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                                            id="femail" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" value="{{ old('phone') }}" type="number" class="form-control"
                                            id="fnumb" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" minlength="10" maxlength="80"
                                            class="form-control testimonail-mess-ht" placeholder="Type your message here.."
                                            required>{{ old('message') }}</textarea>
                                    </div>
                                    {{-- <div class="form-group">
                                <select class="form-control">
                                    <option>Vat Complaince</option>
                                    <option>Vat Complaince 2</option>
                                    <option>Vat Complaince 3</option>
                                </select>
                            </div> --}}
                                    {{-- <div class="form-group">
                                <input type="text" class="form-control" id="inv" placeholder="Number of Incoming Invoices">
                            </div> --}}
                                    {{-- <div class="form-group">
                                <input type="text" class="form-control" id="invo" placeholder="Number of Outgoing Invoices">
                            </div> --}}
                                    <button type="submit" class="btn btn-submit">GET A QUOTE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->


    <!-- Book -->
    {{-- <div id="booking-section" class="wow fadeInDown">
    <div class="container">
        <div class="booking-inner">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="text-section">
                        <div class="section-main-title">
                            <i>Satisfied?</i>
                            AWESOME<span>.</span><br/>BOOK ME NOW<span>.</span>
                        </div>
                        <div class="excerpt">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                                convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                            </p>
                        </div>
                    </div>
                    <div class="featured">
                        <h5>I am featured on</h5>
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <img src="images/fton-1.png" alt="" />
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <img src="images/fton-1.png" alt="" />
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <img src="images/fton-1.png" alt="" />
                            </div>
                            <div class="col-md-3 col-xs-6">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 calendar">
                    <img src="images/cal-1.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- End Book -->

    <style>
        .index-link a:after {
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
