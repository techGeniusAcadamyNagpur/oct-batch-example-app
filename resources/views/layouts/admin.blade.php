<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.admin-panel.head')
</head>

<body>
    @include('includes.admin-panel.sidebar')

    <body>
        <!-- Content Start -->
        <div class="container-fluid position-relative d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
            <div class="content">
                @include('includes.admin-panel.header')
                @yield('content')
            </div>
        </div>
        <!-- Content End -->

        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

    </body>

</html>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('storage/lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('storage/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('storage/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('storage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('storage/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('storage/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('storage/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}">
</script>

<!-- Template Javascript -->
<script src="{{ asset('storage/js/main.js') }}"></script>
