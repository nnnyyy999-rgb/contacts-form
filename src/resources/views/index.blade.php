@extends('layouts.app')

@section('title', 'お問い合わせ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<form action="{{ route('confirm') }}" method="post">
    @csrf

    <div>
        <label>姓</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
        @error('last_name') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>名</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
        @error('first_name') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>性別</label>
        <input type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }}> 男性
        <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}> 女性
        @error('gender') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>メール</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>電話番号</label>
        <input type="text" name="tel1" size="4" value="{{ old('tel1') }}"> -
        <input type="text" name="tel2" size="4" value="{{ old('tel2') }}"> -
        <input type="text" name="tel3" size="4" value="{{ old('tel3') }}">
        @error('tel1') <p class="error">{{ $message }}</p> @enderror
        @error('tel2') <p class="error">{{ $message }}</p> @enderror
        @error('tel3') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>住所</label>
        <input type="text" name="address" value="{{ old('address') }}">
        @error('address') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>建物名</label>
        <input type="text" name="building" value="{{ old('building') }}">
        @error('building') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>お問い合わせ種別</label>
        <select name="category">
            <option value="">選択してください</option>
            <option value="1" {{ old('category') == 1 ? 'selected' : '' }}>商品について</option>
            <option value="2" {{ old('category') == 2 ? 'selected' : '' }}>サポート</option>
            <option value="3" {{ old('category') == 3 ? 'selected' : '' }}>その他</option>
        </select>
        @error('category') <p class="error">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>内容</label>
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content') <p class="error">{{ $message }}</p> @enderror
    </div>

    <button type="submit">確認する</button>
</form>

@endsection
