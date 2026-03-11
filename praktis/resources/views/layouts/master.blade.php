<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
</head>
<body>
    {{-- include Navbar --}}
    @include('partials.navbar')
    @yield('content')

    {{-- include footer --}}
    @include('partials.footer')

    
</body>
</html>