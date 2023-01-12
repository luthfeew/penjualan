<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
</head>

<body>
    <header>
        @include('layout.header')
    </header>
    <ul>
        @section('sidebar')
            <li>HTML</li>
            <li>CSS</li>
            <li>JS</li>
        @show
    </ul>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
