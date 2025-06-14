@extends('layouts.app')
@section('pageTitle', 'Contact -')
@section('content')

    <!-- page Header -->
    <div class="page-header wow fadeInUp">
        <div class="container">
            <div class="page-header-inner">
                <ul class="clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>></span></li>
                    <li><span>Contact Us</span></li>
                </ul>
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- End page Header -->

    <!-- About -->
    <div id="contact-section">
        <div class="container" id="contact">
            <div class="contact-inner">
                <div class="section-main-title wow fadeInDown">
                    <i>Stay in touch</i>
                    SEND A MESSAGE
                </div>
                @if ($errors->any())
                    <!-- <div class="alert alert-danger"> -->
                    <!-- <ul> -->
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <!-- </ul> -->
                    <!-- </div> -->
                @endif
                <form class="form-horizontal contact-form wow fadeInDown" action="{{ route('submit.contact') }}"
                    method="POST">
                    @csrf
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
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" minlength="3" maxlength="25"
                                value="{{ old('name') }}" placeholder="Full Name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="last" name="company_name" minlength="3"
                                maxlength="60" value="{{ old('company_name') }}" placeholder="Company Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone"
                                value="{{ old('phone') }}" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail"
                                value="{{ old('email') }}" required>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                    <div class="col-sm-6">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div> --}}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="form-control" placeholder="Type your message here.." required minlength="10"
                                maxlength="80" name="message">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- <a href="" class="btn btn-more">Submit</a> -->
                            <button type="submit" class="btn btn-more">Submit</button>
                        </div>
                    </div>
                </form>
                {{-- <div class="contact-detail wow fadeInDown">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="title">
                            Address
                        </div>
                        <div class="detail">
                            4203 Hickwael Road,<br/>Chicago, E30M 73PR.<br/>Pincode - 580032
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="title">
                            Contact
                        </div>
                        <div class="detail">
                            +215 123 4567<br/>+215 123 7842
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="title">
                            Email
                        </div>
                        <div class="detail">
                            <a href="">info@bookmeaccount.com</a>
                            <ul class="clearfix">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
                <div class="contact-map wow fadeInDown">
                    <div class="section-main-title">
                        MAP & LOCATION
                    </div>
                    <div id="mmap">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.912732394463!2d72.83206121484908!3d18.935256487168857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1db8f3a336d%3A0xee5f02a808da9e19!2sFlo%20Data%20Services%20India%20Private%20Limited!5e0!3m2!1sen!2sin!4v1621604868509!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.908764400515!2d72.83253481489903!3d18.93543208716868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82fd7b4e338e66db!2sD.%20H.%20Vadivalla%20%26%20Company!5e0!3m2!1sen!2sin!4v1622614030468!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Afterbout -->


    <!-- Quote -->
    {{-- <div class="quote-section wow fadeInDown">
    <div class="container">
        <div class="quote-inner">
            <div class="row clearfix">
                <div class="col-md-8 col-xs-12">
                    <div class="section-main-title">
                        <a href="" class="clearfix">
                            <i>Free Estimate </i>
                            <span>Request a Quote</span><b class="lnr lnr-arrow-right"></b>
                        </a>
                    </div>
                    <p>
Please state what you want and let us redefine conventional accounting solutions.</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="text-center">
                        <a href="" class="btn btn-more">Get A QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- End Quote -->



    <style>
        .contact-link a:after {
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
