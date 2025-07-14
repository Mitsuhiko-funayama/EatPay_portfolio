<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EatPay</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>

    <header class="login-register">
        <div class="login">
            @if (Route::has('login'))
            <div class="nav-links">
                @auth
                <a href="{{ url('/home') }}" class="link">
                    ホーム
                </a>
                @else
                <a href="{{ route('login') }}" class="link">
                    ログイン
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="link ml">
                    新規登録
                </a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </header>

    <main class="main-content">
        <div class="welcome-txt">
            <p class="text-overlay1">
                ようこそ EatPayへ!!
            </p>
            <p class="text-overlay2">
                スマートに飲食店での注文を。
            </p>
        </div>
    </main>

    <footer class="footer">
        <p>
            &copy; {{ date('Y') }} EatPay
        </p>
    </footer>
</body>

</html>