<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <title>@yield('pageTitle') D H Vadivalla & Co. </title>
    @include('layouts.header')

</head>

<body class="accounting-1">
    <div id="wrapper">
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
        @yield('js')

        {{-- <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"> --}}
        <script src="toastr/jquery/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
            integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
        {{-- <link href="{{ asset('../toastr/toast-master/css/jquery.toast.css') }}" rel="stylesheet"> --}}
    </div>


</body>
