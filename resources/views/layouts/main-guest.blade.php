<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    @yield('container')

    @include('layouts.script')

    @stack('scripts')
</body>

</html>
