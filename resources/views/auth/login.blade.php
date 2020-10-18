@extends('layouts')

@section('content')

<div class="sign-main ">
    <div class="sign-cont">
        <div class="devise-card signin-devise-card">
        <div class="form-wrap sign-form-wrap">
            <div class="form-group text-center ">
                <h1 class="sign-logo">UNIVERSE</h1>
                <p class="sign-copy">ログインしてライバルと強くなろう</p>
            </div>
            <form class="new_user"  action="{{ route('login') }}" accept-charset="UTF-8" method="post">
            @csrf
            <div class="form-group signform-group">
                <input id="email" type="email" name="email" class="form-control sign-form-control" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group signform-group">
                <input class="form-control sign-form-control" type="password" class="form-control" name="password" placeholder="パスワード" required>
            </div>
            <div class="action">
                <input type="submit" name="commit" value="ログイン" class="sign-btn">
            </div>
            <p class="sign-devise-link">
            <a href="{{ route('register') }}" class="sign-link white">アカウントを登録する</a>
            </p>
        </div>
    </div>
</div>
@endsection

