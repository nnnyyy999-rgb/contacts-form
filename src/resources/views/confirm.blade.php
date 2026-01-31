<h1>確認画面</h1>

<form action="{{ route('store') }}" method="post">
    @csrf

    <div>
        <label>名前</label>
        <div>
            {{ $inputs['last_name'] }} {{ $inputs['first_name'] }}
        </div>
    </div>

    <div>
        <label>性別</label>
        <div>
            @if($inputs['gender'] == 1)
                男性
            @else
                女性
            @endif
        </div>
    </div>

    <div>
        <label>メールアドレス</label>
        <div>{{ $inputs['email'] }}</div>
    </div>

    <div>
        <label>電話番号</label>
        <div>{{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</div>
    </div>

    <div>
        <label>住所</label>
        <div>{{ $inputs['address'] }}</div>
    </div>

    <div>
        <label>建物名</label>
        <div>{{ $inputs['building'] }}</div>
    </div>

    <div>
        <label>お問い合わせ種別</label>
        <div>
            @if($inputs['category'] == 1)
                商品について
            @elseif($inputs['category'] == 2)
                サポート
            @else
                その他
            @endif
        </div>
    </div>

    <div>
        <label>内容</label>
        <div>{!! nl2br(e($inputs['content'])) !!}</div>
    </div>

    <button type="submit">送信する</button>
</form>

<form action="{{ route('index') }}" method="get">
    <button type="submit">修正する</button>
</form>
