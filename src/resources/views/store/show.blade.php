@extends('layouts.app') {{-- 共通レイアウトファイルを継承 --}}

@push('styles')
<link rel="stylesheet" href="{{ asset('css/store.css') }}">
@endpush

@section('content')
    <div class="store-page">
        <div class="store-header">
            <h1>{{ $storeName ?? '店舗名' }}</h1>
            <p>商品一覧</p>
        </div>

        <div class="product-grid">
            {{-- 商品の繰り返し表示 --}}
            <div class="product-card">
                <img src="{{ asset('img/.png') }}" alt="商品名">
                <h3>チーズバーガー</h3>
                <p>¥500</p>
                <button class="add-to-cart">カートに追加</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('img/.png') }}" alt="商品名">
                <h3>ドリンクセット</h3>
                <p>¥300</p>
                <button class="add-to-cart">カートに追加</button>
            </div>

            {{-- 必要に応じて追加 --}}
        </div>
    </div>
@endsection

