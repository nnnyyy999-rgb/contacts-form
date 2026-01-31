<!-- resources/views/admin.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理画面</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>

    <header class="admin-header">
        <h1>お問い合わせ管理画面</h1>
        <nav>
            <a href="/admin/search">お問い合わせ一覧</a>
            <a href="/logout">ログアウト</a>
        </nav>
    </header>

    <main class="admin-main">
        @yield('content')
    </main>

</body>
</html>
