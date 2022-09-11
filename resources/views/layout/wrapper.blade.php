<!DOCTYPE html>
<html lang="en">

<!--html header-->
@include('layout.header')
<!--html header-->

<body id="main-body">

<!--main wrapper-->
<div id="main-wrapper">

    <!--top nav-->
    @include('navs.navbar-top')
    <!--top nav-->

    <!--page wrapper-->
    <div class="page-wrapper">

        <!-- main content -->
        @yield('content')
        <!-- /#main content -->

    </div>
    <!--page wrapper-->
</div>

<!--page footer-->
@include('layout.footer')

<!--js footer-->
@include('layout.footer-js')

</body>
</html>
