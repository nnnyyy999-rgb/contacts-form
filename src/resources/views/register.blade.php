@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact-index.css') }}">
@endsection

@section('content')
<div class="register__content">
    <h2 class="register__heading">Register</h2>

    <form class="form" action="/register" method="post">
        @csrf

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="山田 太郎">
                </div>
                <div class="form__error">@error('name'){{ $message }}@enderror</div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com">
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
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>

@endsection
