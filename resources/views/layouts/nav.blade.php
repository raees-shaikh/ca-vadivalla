<div class="cover-z wow fadeInDown">
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="images/logo2.png" width="171px" alt=""></a>
                    </div>
                    <!-- End Logo -->
                    <!-- phone small -->
                    <div class="right showres">
                        <!-- Top Section -->
                        <div class="top-section">
                            <div class="top-section-right clearfix">
                                <div class="top-section-right-text">
                                    Feel Free to <br/> Contact Us
                                </div>
                                <div class="top-section-right-phone clearfix">
                                    <h4><img src="images/ico-phone.png" alt="" /><span><a class="text-dark nav-num-color" href="tel: 918591854024">+91-8591854024</a></span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Section -->
                    </div>
                    <!-- phone small -->
                    <div class="clearfix showres"></div>
                </div>
                <div class="col-md-8">
                    <div class="right hideres">
                        <!-- Top Section -->
                        <div class="top-section">
                            <div class="top-section-right clearfix">
                                <div class="top-section-right-text">
                                    Feel Free to <br/> Contact Us
                                </div>
                                <div class="top-section-right-phone clearfix">
                                    <h4><img src="images/ico-phone.png" alt="" /><span><a class="text-dark nav-num-color" href="tel: 918591854024">+91-8591854024</a></span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Section -->
                    </div>
                    <div class="clearfix"></div>
                    <!-- Navigation -->
                    <div class="right mainavfull meun-bar-mob-mt">
                        <div id="main-navigation">
                            <a href="#" id="btn-nav"><i class="fa fa-bars"></i></a>
                            <ul class="nav-item clearfix nav-ul-mob-mt">
                                <li class="index-link"><a href="{{route('index')}}">Home</a></li>

                                {{-- <li class="active">
                                    <a href="index.html">Homepages</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Accounting</a></li>
                                        <li><a href="accounting-2.html">Accounting 2</a></li>
                                        <li><a href="accounting-3.html">Accounting 3</a></li>
                                        <li><a href="architec.html">Architec</a></li>
                                        <li><a href="attorney.html">Attorney</a></li>
                                        <li><a href="barber.html">Barber</a></li>
                                        <li><a href="corporate-trainer.html">Corporate Trainer</a></li>
                                        <li><a href="mover.html">Mover</a></li>
                                        <li><a href="therapy.html">Therapy</a></li>
                                        <li><a href="trainer.html">Trainer</a></li>
                                    </ul>
                                </li> --}}
                                <li class="about-link"><a href="{{route('about')}}">About Us</a></li>
                                {{-- <li><a href="why-choose-us.html">Why Choose us</a></li> --}}
                                <li class="service-link">
                                    <a href="#">Services</a>
                                    <a class="collapsible drop-icon drop-icon-display"><i class="fa fa-bars"></i></a>
                                    <ul class="submenu">
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
                                </li>
                                <li class="industries-link"><a href="{{route('industries')}}">Industries</a></li>

                                {{-- <li>
                                    <a href="#">Page</a>
                                    <ul class="submenu">
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="portfolio.html">Portfolio 2</a></li>
                                        <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                        <li><a href="gallery-3.html">Gallery 3</a></li>
                                        <li><a href="gallery-4.html">Gallery 4</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="shortcodes.html">Shortcodes</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="blog.html">Blog</a></li> --}}
                                <li class="client-link"><a href="{{route('careers')}}">Careers</a></li>

                                <li class="contact-link"><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- End Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    </div>



<script>
        var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
        content.style.display = "none";
        } else {
        content.style.display = "block";
        }
    });
    }
</script>
