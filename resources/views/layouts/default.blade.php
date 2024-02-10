<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Laravel学習')</title>
    <style>
        body {
            display: grid;
            grid-template: "header" auto "contents" 1fr "footer" auto/100%;
            max-width: 1280px;
            min-height: 100vh;
            margin: 0 auto;
        }

        header {
            grid-area: header;
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        nav ul {
            display: flex;
            padding: 0;
            list-style: none;
        }
        nav li {
            margin-right: 10px;
        }
        a {
            color: #0f83fd;
        }
        img {
            width: 100%;
        }
        main {
            grid-area: contents;
            padding: 10px 0;
        }
        footer {
            grid-area: footer;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Laravel9学習</h1>
        <nav>
            <ul>
                <li><a href="/">トップ</a></li>
                <li><a href="/curriculum">カリキュラム</a></li>
                <li><a href="/events">イベント</a></li>
                <li><a href="#">サービス</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>@yield('title','Laravel学習')</h2>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 ●●▲▲</p>
    </footer>
</body>
</html>