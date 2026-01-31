<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- リセットCSS --}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    {{-- 共通CSS --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    {{-- ページごとのCSS --}}
    @yield('css')
</head>
<body>

    <header class="header">
        <h1 class="header-title">FashionablyLate</h1>
    </header>

    <main class="main">
        @yield('content')
    </main>

</body>
</html>
