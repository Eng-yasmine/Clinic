<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
    @include('admin.layout.links')

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layout.nav')


        <!-- Sidebar -->
        @include('admin.layout.sidebar')
        @yield('content')

        @include('admin.layout.footer')
    </div>
    @include('admin.layout.scripts')
</body>

</html>
