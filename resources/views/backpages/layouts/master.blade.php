<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/favicon.ico') }}" />
    @yield('cdn')

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('backpages.layouts.sidebar')
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <!-- Page content-->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @include('backpages.layouts.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    @yield('scripts')

</body>

</html>
