<!-- Footer -->
<div id="footer-section" class="wow fadeInUp footer-bg">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <div class="ft-logo">
                        <img src="images/logo2.png" width="175px" alt="" />
                    </div>
                    <div class="ft-text">
                        <p class="foo-p">
                            D H Vadivalla & Co, is a Chartered Accountants firm Founded in 1982 by CA Dinesh H
                            Vadivalla, providing Assurance, Taxation , Auditing, and Advisory services.
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <ul class="ft-menu clearfix footer-links">
                        <h4 class="footer-title">Useful Links</h4>
                        <li class=""><a href="{{ route('index') }}">Home</a></li>
                        <li class=""><a href="{{ route('about') }}">About Us</a></li>
                        <li class=""><a href="{{ route('audit-assurance') }}">Services</a></li>
                        <li class=""><a href="{{ route('industries') }}">Industries</a></li>
                        <li class=""><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        {{-- <li><a href="">Features</a></li>
                        <li><a href="">tax consulting</a></li>
                        <li><a href="">services</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Page</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">salary management</a></li> --}}
                    </ul>
                </div>
                <div class="col-md-5 col-xs-6">
                    <div class="map-wrap left" style="display: none">
                        <div id="map"></div>
                    </div>
                    <div class="ft-contact left footer-contact">
                        {{-- <div class="name">Contact</div> --}}
                        <h4 class="footer-title">Contact</h4>
                        <p class="foo-p">13, Prospect House, 29 Raghunath Dadaji Street, Near Old Handloom House, Fort,
                            Mumbai, Maharashtra 400001</p>
                        <div class="call">Call Us : <a href="tel: 918591854024">+91-8591854024</a></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <p class="copyright-p copyright-margin-mob"> © <?php echo date('Y'); ?> All Rights Reserved CA
            Vadivalla | Design
            & Developed by <a href="https://www.acetrot.com/" target="_blank">Acetrot</a></p>
    </div>
</div>
<!-- End Footer -->
<div id="mmap" class="hide"></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- map -->
<script src="js/map.min.js"></script>
<!-- Slick -->
<script src="js/slick.js"></script>
<!-- Animation -->
<script src="js/wow.min.js"></script>
<!-- Prettyphoto -->
<script src="js/jquery.prettyPhoto.js"></script>

<!-- counter -->
<script src="js/waypoint.js"></script>
<script src="js/counterup.js"></script>
<!-- Themescript -->
<script src="js/theme-script.js"></script>

<!-- Lazyload -->
<script src="js/lazysizes.js"></script>


<!-- toaster -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- <script href="{{ asset('../toastr/toast-master/js/jquery.toast.js') }}"></script> --}}
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            toastr.success("{{ Session::get('message') }}");
        @endif
    @elseif(Session::get('alert-type') =="info")
        @if (Session::has('message'))
            toastr.info("{{ Session::get('message') }}");
        @endif
    @elseif(Session::get('alert-type') == "error")
        @if (Session::has('message'))
            toastr.error("{{ Session::get('message') }}");
        @endif
    @else
        @if (Session::has('message'))
            toastr.warning("{{ Session::get('message') }}");
        @endif
    @endif

</script>
