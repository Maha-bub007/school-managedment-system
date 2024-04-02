<!DOCTYPE html>
<html lang="en">
<head>
    <title>Academics &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.include.style');
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @include('frontend.include.hader');

    <div class="site-wrap">
        @yield('contant');
    </div>
    
    @include('frontend.include.footer');

    @include('frontend.include.script');
</body>

</html>