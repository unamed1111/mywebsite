<!DOCTYPE html>
<html lang="en">
    @include('frontend.layouts.header')
    <body>
    @include('frontend.layouts.navbar')
        
    @yield('content')

        <!-- Start of footer -->
    @include('frontend.layouts.footer')
    </body>
    @include('frontend.layouts.script')
</html>