@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('nav')
<form action="/register" method="get">
    <button class="header-nav__button">register</button>
</form>
@endsection

@section('content')
<div class="login-page">
    <div class="login-page__title">
        <h2 class="login-page__title-text">Login</h2>
    </div>
    <form action="/login" method="post" class="login-form">
        @csrf
        <div class="login-form__inner">
            <div class="login-form__header">メールアドレス</div>
            <input type="email" name="email" placeholder="例: test@example.com" class="login-form__input" value="{{ old('email') }}">
            <div class="login-form__header">パスワード</div>
            <input type="password" name="password" placeholder="例: coachtech1106" class="login-form__input">
            <div class="login-form__button">
                <button type="submit" class="login-form__button-submit">ログイン</button>
            </div>
        </div>
    </form>
</div>
@endsection