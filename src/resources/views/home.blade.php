@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- 追加CSS読み込み -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ホーム
                </div>
                <div class="card-body">
                    ログインしました！
                </div>
            </div>
        </div>
    </div>

    <!-- ボタンをカードの外に配置 -->
    <div class="top-button-wrapper">
        <a href="{{ route('top') }}" class="btn btn-primary">
            トップ画面へ
        </a>
    </div>
</div>
@endsection
