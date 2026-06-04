<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="container-scroller d-flex">

        @include('layouts.sidebar')
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('layouts.navbar')
            <!-- partial -->
            <div class="main-panel">
                @yield('container')
                <!-- content-wrapper ends -->
                @include('layouts.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('layouts.script')

    @stack('scripts')
</body>

</html>
