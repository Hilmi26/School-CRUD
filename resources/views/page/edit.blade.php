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

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Change Student Data</h4>
                                    {{-- {{$siswa}} --}}
                                    {{-- {{$sekolah}} --}}
                                    <form class="forms-sample" action="/page/student/{{$siswa->id}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text"
                                                class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                placeholder="Masukkan Nama" value="{{ $siswa->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label >Alamat</label>
                                            <input type="text"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                name="alamat" placeholder="Masukkan Alamat"
                                                value="{{ $siswa->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Sekolah</label>
                                            <select class="form-control  @error('sekolah_id') is-invalid @enderror"
                                                name="sekolah_id">
                                                <option value="{{ $siswa->sekolah->id }}">
                                                    {{ $siswa->sekolah->nama_sekolah }}</option>
                                                @foreach ($sekolah as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_sekolah }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    {{-- <div class="form-group">
                                         <label>File upload</label>
                                         <input type="file" name="img[]" class="file-upload-default">
                                         <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-sm btn-primary" type="button">Upload</button>
                                            </span>
                                         </div>
                                         </div> --}}

                                        <button type="submit" class="btn btn-primary me-2">Update</button>
                                        <a href="{{ url('/page/student') }}" class="btn btn-light">Cancel</a>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
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
