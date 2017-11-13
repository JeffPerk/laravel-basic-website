<!doctype html>
<html>
<head>
    <title>@yield('title', 'Basic-Website')</title>
</head>
<body>
    @yield('content')

    @include('includes.sidebar')
</body>
</html>