<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EatPay - トップ</title>
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
</head>

<body>
    <!-- ヘッダー -->
    <header class="top-header">
        <div class="header-left">
            <a href="{{ url('/') }}" class="app-name">EatPay</a>  <!-- url('/')：Laravelのhelpers.phpにあるurl()関数で、ルート（トップページ）を生成する　-->
        </div>
        <div class="header-right">
            <span class="username">{{ Auth::user()->name ?? 'ゲスト' }}</span>
            <a href="{{ route('cart.index') }}" class="cart-icon">
                <img src="{{ asset('img/img100.png') }}" alt="カート" class="cart-img">
                @if(session('cart_count', 0) > 0)
                    <span class="cart-count">{{ min(session('cart_count'), 999) }}</span>
                @endif
            </a>
        </div>
    </header>

    <!-- メイン -->
    <main class="top-main">
        <h1 class="section-title">全店舗</h1>

        <div class="store-grid">
            <!-- 1つの店舗カードの例 -->
            <!-- 必要に応じて店舗を追加 -->
            <div class="store-card">
                <a href="{{ route('store.show', ['id' => 1]) }}">
                    <div class="store-name">ハンバーガー店</div>
                    <img src="{{ asset('img/img1-5.png') }}" alt="ハンバーガー店">
                </a>
            </div>
            <div class="store-card">
                <a href="{{ route('store.show', ['id' => 2]) }}">
                    <div class="store-name">寿司屋</div>
                    <img src="{{ asset('img/img2-2.png') }}" alt="寿司屋">
                </a>
            </div>
            <div class="store-card">
                <a href="{{ route('store.show', ['id' => 3]) }}">
                    <div class="store-name">カフェ</div>
                    <img src="{{ asset('img/img3-1.png') }}" alt="カフェ">
                </a>
            </div>
            <div class="store-card">
                <a href="{{ route('store.show', ['id' => 4]) }}">
                    <div class="store-name">牛丼屋</div>
                    <img src="{{ asset('img/img4-1.png') }}" alt="牛丼屋">
                </a>
            </div>
            <div class="store-card">
                <a href="{{ route('store.show', ['id' => 5]) }}">
                    <div class="store-name">イタリア料理屋</div>
                    <img src="{{ asset('img/img5-1.png') }}" alt="イタリア料理屋">
                </a>
            </div>
            <div class="store-card">
                <a href="{{ route('store.show', ['id' => 6]) }}">
                    <div class="store-name">ラーメン屋</div>
                    <img src="{{ asset('img/img6-1.png') }}" alt="ラーメン屋">
                </a>
            </div>
        </div>
    </main>

    <!-- フッター -->
    <footer class="top-footer">
        <p>&copy; {{ date('Y') }} EatPay</p>
    </footer>

</body>

</html>