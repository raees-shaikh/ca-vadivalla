@extends('layouts.app')
@section('pageTitle', 'About -')
@section('content')


<!-- page Header -->
<div class="page-header wow fadeInUp">
    <div class="container">
        <div class="page-header-inner">
            <ul class="clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><span>></span></li>
                <li><span>About Us</span></li>
            </ul>
            <h1>About Us</h1>
        </div>
    </div>
</div>
<!-- End page Header -->

<!-- About -->
<div id="about-section" class="wow fadeInDown">
    <div class="container">
        <div class="about-inner about-custom-inner">
            <div class="row nomarg">
                <div class="col-md-6 col-xs-6 nopad">
                    <div class="section-main-title">
                        <i>Something about us</i>
                        WELL ORGANIZED<span>.</span><br/>
                        TRUSTED BY THOUSANDS<span>.</span>
                    </div>
                    <div class="excerpt">
                        <p>D H Vadivalla & Co. is a Chartered Accountant firm providing Audit, Tax, Advisory and assurance services to businesses.</p>
                        <p>Founded in 1982 by CA Dinesh H Vadivalla has established itself as a reputable and dependable financial associate, working with companies and corporations from diverse sectors including, - Logistics, Investment Banking, Banking & NBFC, Real Estate, Healthcare, Hospitality, Media & Entertainment, Manufacturing, & Trading, Information Technology, and Other Services.</p>
                        <p>A registered member of the Institute of Chartered Accountants of India, D H Vadivalla & Co comprises highly qualified accountants and financial analysts With over 4 Decade of cumulative work experience, We at D H Vadivalla & Co strive to deliver sincere, secure and smart assistance with personalized attention devoted to untangling the complexities of the financial landscape so you, the client, can focus on the core competencies of your business.</p>

                        <div class="clearfix"></div>
                        <div class="step step-ab-mb">
                            <div class="step-inner">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-xs-4 step-item">
                                        <div class="step-ct">
                                            <img src="images/ico-check.png" alt="">
                                            <p class="aboutpg-step-p">
                                                ONTIME EVERYTIME<br/>at service
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4 step-item">
                                        <div class="step-ct">
                                            <img src="images/ico-pin.png" alt="">
                                            <p class="aboutpg-step-p">
                                                Available at your<br/>location
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4 step-item">
                                        <div class="step-ct">
                                            <img src="images/ico-calendar.png" alt="">
                                            <p class="aboutpg-step-p">
                                                One to One <br/> Interaction
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
                <div class="col-md-6 col-xs-6 nopad">
                    <div class="about-featured-img">
                        <div class="row marg-10">
                            <div class="col-md-6 col-xs-6 ab-col-mob pad-10">
                                <div class="about-featured-img-item ab-img-display-mob">
                                    <img data-src="images/ft-1.png" alt="" class="img-responsive lazyload" />
                                    <img data-src="images/ft-2.png" alt="" class="img-responsive ab-img-ml lazyload" />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 ab-col-mob pad-10">
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

<!-- Facts -->
{{-- <div id="fact-section" class="wow fadeInDown">
    <div class="container">
        <div class="fact-inner fact-custom-inner">
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

<!-- Team -->
{{-- <div class="team-section wow fadeInDown">
    <div class="container">
        <div class="team-inner">
            <div class="text-center">
                <div class="section-main-title">
                    <i>Expert Team</i>
                    MEET OUR ACCOUNTING TEAM
                </div>
                <div class="excerpt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                        convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                    </p>
                </div>
                <div class="row clearfix">
                    <div class="col-md-3 col-xs-4">
                        <div class="team-item">
                            <img src="images/team-1.png" alt="" class="img-responsive">
                            <div class="t-name">ROYAL DOE</div>
                            <a href="" class="">royaldoe@accouting.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-4">
                        <div class="team-item">
                            <img src="images/team-2.png" alt="" class="img-responsive">
                            <div class="t-name">GOUDY DOE</div>
                            <a href="" class="">royaldoe@accouting.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-4">
                        <div class="team-item">
                            <img src="images/team-3.png" alt="" class="img-responsive">
                            <div class="t-name">KIRIT, CPA</div>
                            <a href="" class="">royaldoe@accouting.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-4">
                        <div class="team-item">
                            <img src="images/team-4.png" alt="" class="img-responsive">
                            <div class="t-name">JOHINTHON</div>
                            <a href="" class="">royaldoe@accouting.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Team -->

<!-- Afterbout -->
{{-- <div id="afterbout-section" class="wow fadeInDown">
    <div class="container">
        <div class="afterbout-inner">
            <div class="text-center">
                <div class="section-main-title">
                    <i>Something About Us</i>
                    WELL ORGANIZED<span>.</span> TRUSTED BY THOUSANDS<span>.</span>
                </div>
                <div class="excerpt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                        convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-history"></i>
                    </div>
                    <h4>ON TIME EVERYTIME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Pellent esque dignissim eros a sapien tempus,
                        ut eleifend neque convallis.
                    </p>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-earth"></i>
                    </div>
                    <h4>AVAILABLE AT YOUR LOCATION</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Pellent esque dignissim eros a sapien tempus,
                        ut eleifend neque convallis.
                    </p>
                </div>
                <div class="col-md-4 col-xs-4 afterbout-item">
                    <div class="afterbout-icon">
                        <i class="lnr lnr-calendar-full"></i>
                    </div>
                    <h4>ON TIME EVERYTIME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Pellent esque dignissim eros a sapien tempus,
                        ut eleifend neque convallis.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-more">LEARN MORE</a><a href="" class="btn btn-bordered">BOOK NOW</a>
            </div>

        </div>
    </div>
</div> --}}
<!-- End Afterbout -->


<!-- Client -->
<div id="client-section" class="wow fadeInUp">
    <div class="container">
        <div class="client-inner">
            <div class="text-center">
                <div class="section-main-title">
                    {{-- <i>Awesome Clients</i> --}}
                    SOME OF OUR CLIENTS
                </div>
                {{-- <div class="excerpt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellent esque dignissim eros a sapien tempus, ut eleifend neque
                        convallis. Duis ac ligula nec sem fringilla. Mauris lacinia augue sagittis dolor.
                    </p>
                </div> --}}
            </div>
            <div class="row client nomarg clearfix">
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/1.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/2.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img  class="lazyload" data-src="images/client-logo/3.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/4.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/5.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/6.jpg" alt="" /></a>
                </div>
            </div>
            <div class="row client nomarg clearfix">
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/7.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/8.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/9.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/10.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/11.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/12.jpg" alt="" /></a>
                </div>
            </div>
            <div class="row client nomarg clearfix">
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/13.jpg" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/14.jpg" alt="" /></a>
                </div>

                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/ameriken.png" alt="" /></a>
                </div>
                <div class="col-md-2 col-xs-4 client-item nopad">
                    <a href=""><img class="lazyload" data-src="images/client-logo/warren.png" alt="" /></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Client -->

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
                    <p>
                    Please state what you want and let us redefine conventional accounting solutions.</p>
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



<style>
.about-link a:after{
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
