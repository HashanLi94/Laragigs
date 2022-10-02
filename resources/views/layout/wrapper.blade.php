<!DOCTYPE html>
<html lang="en">

<!--html header-->
@include('layout.header')
<!--html header-->

<body id="main-body">

<!--top nav-->
@include('navs.navbar-top')
<!--top nav-->

<!-- main content -->
<main class="mb-40">
    @yield('content')
</main>
<!-- /#main content -->

<!--page footer-->
@include('layout.footer')

<x-flash-messages />

<!--js footer-->
@include('layout.footer-js')

</body>
</html>
