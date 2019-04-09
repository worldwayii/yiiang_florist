<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('includes.navbar')

    @yield('content')

    @include('includes.form-foot')
    @include('includes.footerscript')
</body>
</html>
