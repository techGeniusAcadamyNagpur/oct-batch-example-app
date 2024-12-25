<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.manager-panel.head')
</head>

<body class="skin-blue">

    <div class="wrapper">
        @include('includes.manager-panel.header')
        @include('includes.manager-panel.sidebar')

        <!-- pages will link here -->
        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            @yield('content')
        </div><!-- /.content-wrapper -->
        @include('includes.manager-panel.footer')
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/jQuery/jQuery-2.1.3.min.js') }}">
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/bootstrap/js/bootstrap.min.js') }}"
        type="text/javascript"></script>
    <!-- FastClick -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/fastclick/fastclick.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('storage/manager-panel-dependacies/dist/js/app.min.js') }}"
        type="text/javascript"></script>
    <!-- Sparkline -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/sparkline/jquery.sparkline.min.js') }}"
        type="text/javascript"></script>
    <!-- jvectormap -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"
        type="text/javascript"></script>
    <!-- daterangepicker -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/daterangepicker/daterangepicker.js') }}"
        type="text/javascript"></script>
    <!-- datepicker -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/datepicker/bootstrap-datepicker.js') }}"
        type="text/javascript"></script>
    <!-- iCheck -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/iCheck/icheck.min.js') }}"
        type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/slimScroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/plugins/chartjs/Chart.min.js') }}"
        type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script
        src="{{ asset('storage/manager-panel-dependacies/dist/js/pages/dashboard2.js') }}"
        type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('storage/manager-panel-dependacies/dist/js/demo.js') }}"
        type="text/javascript"></script>
</body>

</html>
