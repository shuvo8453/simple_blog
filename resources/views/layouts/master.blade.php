<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.header')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        @include('layouts.partials.navbar')
    </header>

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.script')

    @yield('script')
</body>

</html>
