<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body id="page-top">
@include('admin.includes.header')
@include('admin.includes.sidebar')
@yield('content')

@include('admin.includes.foot')
@include('admin.includes.footerscripts')
</body>
</html>
