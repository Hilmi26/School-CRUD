<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">

        {{-- Navbar --}}
        @include('layout.navbar')
        {{-- Navbar --}}

        <div class="container-fluid page-body-wrapper">

            <!-- panel -->
            {{-- @include('layout.panel') --}}
            <!-- panel -->

            <!-- sidebar -->
            @include('layout.sidebar')
            <!-- sidebar -->

            <!-- main-panel Start -->
            <div class="main-panel">

                {{-- dashboard --}}

                {{-- @include('flashmessage') --}}
                @yield('main')
                {{-- dashboard --}}

                {{-- footer --}}
                @include('layout.footer')
                {{-- footer --}}

            </div>
            <!-- main-panel ends -->
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('/') }}assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('/') }}assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/') }}assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('/') }}assets/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('/') }}assets/js/off-canvas.js"></script>
    <script src="{{ asset('/') }}assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('/') }}assets/js/template.js"></script>
    <script src="{{ asset('/') }}assets/js/settings.js"></script>
    <script src="{{ asset('/') }}assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('/') }}assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/js/dashboard.js"></script>
    <script src="{{ asset('/') }}assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
