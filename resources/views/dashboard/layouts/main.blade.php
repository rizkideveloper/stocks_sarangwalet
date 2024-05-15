<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/assets/css/portal.css">

    <script src="/assets/plugins/jquery/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

    <link href="/assets/plugins/datatables/datatables.min.css" rel="stylesheet">

    <link href="/assets/plugins/sweetalert2/sweetalert2.min.css
    " rel="stylesheet">

</head>

<body class="app">


    @include('dashboard.partials.header')

    @include('dashboard.partials.sidebar')

    <!-- Start Page Content here -->

    <div class="app-wrapper">

        @yield('container')

        @include('dashboard.partials.footer')

    </div><!--//app-wrapper-->

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/assets/plugins/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="/assets/plugins/chart.js/chart.min.js"></script>
    <script src="/assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="/assets/js/app.js"></script>

    {{-- datatables --}}
    <script src="/assets/plugins/datatables/datatables.min.js"></script>

    <script src="
            /assets/plugins/sweetalert2/sweetalert2.all.min.js
            "></script>

</body>

</html>
