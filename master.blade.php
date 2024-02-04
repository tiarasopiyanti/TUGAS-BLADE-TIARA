<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <!-- Navbars-->
        @include('template.separate.navbar')
        <!-- Sidebar-->
        <div id="layoutSidenav">
            @include('template.separate.sidebar')
            <!-- Content-->
            <div id="layoutSidenav_content">
                @include('template.separate.main')
                <!-- Footer-->
                @include('template.separate.footer')

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('sbadmin/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('sbadmin/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('sbadmin/assets/demo/chart-pie-demo.js') }}"></script>
    </body>
</html>