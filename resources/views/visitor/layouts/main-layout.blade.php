<!DOCTYPE html>
<html lang="en-US" class="home blog no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('visitor.includes.links')
</head>
<body class="home sticky-menu sidebar-off" id="top">

    @include('visitor.includes.header')

    @yield('page-content')

    @include('visitor.includes.footer')

    @include('visitor.includes.top-search')

    @include('visitor.includes.scripts')
</body>
</html>
