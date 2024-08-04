

@php
    $dateNow = date('Y');
    $WebTitle = "S-TIME";
    $CompanyLink = "https://www.siamdeeptech.com/";
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $WebTitle }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo/1003.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/sdt.css" rel="stylesheet">
    @yield('style')
</head>

<body>
    <!--wrapper-->
    <main id="main" class="main">
        <!--start header -->
        @include('layouts.header')
        <!--start Sidebar -->
        @include('layouts.sidebar')
        <!--start page wrapper -->
        @yield('main')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright 2024 - {{ $dateNow }} <strong><a href="{{ $CompanyLink }}" target="_blank">Siam Deep Tech Co.,Ltd</a></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Power by <a href="#">Innovation (JacksDEV)</a> | <strong>S-TIME Module</strong>
        </div>
    </footer>

    <!--Start Back To Top Button-->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!--End Back To Top Button-->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    {{-- Import --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        var apiUrl = "{{ config('app.api_url') }}";
        // console.log(apiUrl);

        let members = sessionStorage.getItem('members');

        if (members) {
            members = JSON.parse(members);
            // console.log(members.role);
            // window.location.href = '{{ url('') }}';
            if (members.role !== 'Developer' || members.role !== 'Super Owner') {
                $('#pathB').prop('hidden', true);

                if (members.role === 'Super Owner') {
                    $('#pathA').prop('hidden', true);
                    $('#pathB').prop('hidden', false);
                } else {
                    $('#pathA').prop('hidden', false);
                }
            }
        } else {
            sessionStorage.clear();
            window.location.href = '{{ url('/login') }}';
        }

        let sessionData = JSON.parse(sessionStorage.getItem('members'));
        // dataSession = JSON.parse(members);


        // logout
        function logout(){
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    sessionStorage.clear();
                    window.location.href = '{{ url('/login') }}';
                }
            });
        }
    </script>
    @yield('script')
</body>

</html>
