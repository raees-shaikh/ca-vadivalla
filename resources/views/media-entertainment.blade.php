@extends('layouts.app')
@section('pageTitle', 'Media & Entertainment -')
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
                <li><span>Media & Entertainment</span></li>
            </ul>
            <h1>Media & Entertainment</h1>
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
                        Media & Entertainment
                    </div>
                    <div class="excerpt">
                        <p>
                            We are leading specialists for every accounting need of the media and entertainment industry. We understand and appreciate the very special nature of the industry. Whatever your role in the media and entertainment industry we believe our expertise, compassion and understanding from working in the sector ensures we are best placed to look after your financial affairs. We are well proficient in the accountancy needs and tax issues affecting TV production companies, film production companies and commercial production companies.                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

