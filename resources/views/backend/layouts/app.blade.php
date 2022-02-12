<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{!is_null(global_setting()) ? 'ADMIN | '.global_setting()->title : 'ADMIN | DEMO'}}</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico" type="image/x-icon') }}">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custome_css.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

    <link href="{{asset('backend/assets/css/cropper.min.css') }}" rel="stylesheet" />
    <link href="{{asset('backend/assets/css/dropzone.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    @include('backend.layouts.nav')
    @include('backend.layouts.header')


    @yield('content')

    @yield('script')


    <script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend/assets/js/cropper.min.js') }}"></script>
<script src="{{asset('backend/assets/js/dropzone.js') }}"></script>
<script src="{{asset('backend/assets/js/my-dropzone.js') }}"></script>


</body>

</html>
