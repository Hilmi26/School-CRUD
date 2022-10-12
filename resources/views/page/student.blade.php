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
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex">
                                        <h4 class="card-title">Table Students</h4>

                                        <div class="ms-auto">
                                            <a href="/page/create" type="button" class="btn btn-primary">Tambah
                                                Data</a>
                                        </div>

                                    </div>

                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Sekolah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($data as $item)
                                                    <tr class="text-center">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item['nama'] }}</td>
                                                        <td>{{ $item['alamat'] }}</td>
                                                        <td>{{ $item->sekolah->nama_sekolah }}</td>

                                                        <td>
                                                            <a href="/page/edit/{{ $item->id }}" type="button"
                                                                class="btn btn-md btn-dark" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="Edit">
                                                                <i class="ti-file"></i>
                                                            </a>
                                                            <form action="/page/destroy/{{ $item->id }}" method="post" style="display: inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="btn btn-md btn-danger"
                                                                    onclick="return confirm ('Yakin akan menghapus data?')"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="Delete">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->


                @include('layout.footer')
                <!-- partial -->
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
