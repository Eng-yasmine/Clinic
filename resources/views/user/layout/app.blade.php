@include('user.layout.links')
<title>@yield('title')</title>
@livewireStyles
</head>

<body>
    <!--nav-->
    @include('user.layout.nav')
    <!--nav-->

    <!--content-->
    @yield('content')
    <!--content-->

    <!--footer-->
    @include('user.layout.footer')
    <!--footer-->

    <!--scripts-->
    @include('user.layout.scripts')
    <!--scripts-->
    @livewireScripts
</body>

</html>
