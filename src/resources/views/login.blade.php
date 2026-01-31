@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact-index.css') }}">
@endsection

@section('content')
<div class="login__content">
    <h2 class="login__heading">Login</h2>

    <form class="form" action="/login" method="post">
        @csrf

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="test@example.com">
                </div>
                <div class="form__error">@error('email'){{ $message }}@enderror</div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">パスワード</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="********">
                </div>
                <div class="form__error">@error('password'){{ $message }}@enderror</div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>

    </form>
</div>

@endsection
