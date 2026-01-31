<!-- resources/views/search.blade.php -->

@extends('admin')

@section('content')

<h2>お問い合わせ一覧</h2>

<table class="contact-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メール</th>
            <th>電話番号</th>
            <th>内容</th>
            <th>詳細</th>
        </tr>
    </thead>

    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->tel }}</td>
            <td class="truncate">{{ $contact->message }}</td>
            <td>
                <button class="open-modal-btn"
                    data-id="{{ $contact->id }}"
                    data-name="{{ $contact->name }}"
                    data-email="{{ $contact->email }}"
                    data-tel="{{ $contact->tel }}"
                    data-message="{{ $contact->message }}">
                    詳細
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- ⭐ モーダル部分 ⭐ -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>

        <h3>お問い合わせ詳細</h3>

        <p><strong>ID：</strong> <span id="m_id"></span></p>
        <p><strong>名前：</strong> <span id="m_name"></span></p>
        <p><strong>メール：</strong> <span id="m_email"></span></p>
        <p><strong>電話番号：</strong> <span id="m_tel"></span></p>
        <p><strong>内容：</strong></p>
        <div class="modal-message" id="m_message"></div>
    </div>
</div>

<script>
// モーダル開く
document.querySelectorAll('.open-modal-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.getElementById('m_id').textContent = btn.dataset.id;
        document.getElementById('m_name').textContent = btn.dataset.name;
        document.getElementById('m_email').textContent = btn.dataset.email;
        document.getElementById('m_tel').textContent = btn.dataset.tel;
        document.getElementById('m_message').textContent = btn.dataset.message;

        document.getElementById('modal').style.display = 'block';
    });
});

// モーダル閉じる
document.getElementById('closeModal').onclick = () => {
    document.getElementById('modal').style.display = 'none';
};
</script>

@endsection
