<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link href="{{ asset('resource/assets/img/Logo Dipersip.png') }}" rel="icon">
    <link href="{{ asset('resource/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('resource/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resource/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('resource/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resource/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('resource/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('resource/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('resource/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">




    <!-- Template Main CSS File -->
    <link href="{{ asset('resource/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">



    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.body.header')

    <!-- ======= Sidebar ======= -->
    @include('admin.body.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('home_admin')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin.body.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('resource/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('resource/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('resource/assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Bootstrap JS library -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('#myModal').on('show.bs.modal', function(event) {
            var photo = $(event.relatedTarget).data('photo');
            var caption = $(event.relatedTarget).data('caption');
            var modal = $(this);
            modal.find('#modal-image').attr('src', photo);
            modal.find('#modal-caption').text(caption);
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>


</body>

</html>
