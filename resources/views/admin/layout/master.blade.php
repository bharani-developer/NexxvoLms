<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('admin.layout.top')
    @yield('css')
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">

    @include('admin.layout.topnav')
    @include('admin.layout.sidenav')

    @yield('content')

    @include('admin.layout.footer')



</body>
@include('admin.layout.bottom')

@yield('script')


</html>
