<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    // 入力ページ表示（PG01）
    public function index()
    {
        return view('index');
    }

    // 確認ページ表示（PG02）
    public function confirm(ContactRequest $request)
    {
        // バリデーション済の値を取得
        $validated = $request->validated();

        // セッションに保存（PG02の指示）
        $request->session()->put('contact', $validated);

        // 確認ページへ
        return view('confirm', ['inputs' => $validated]);
    }
    
    // PG03：データ保存処理
public function store(Request $request)
{
    // セッションから値を取り出す
    $inputs = $request->session()->get('contact');

    if (!$inputs) {
        return redirect('/')->with('error', 'セッションが切れています。最初から入力してください。');
    }

    // 電話番号の結合（DBに保存するため）
    $tel = $inputs['tel1'] . $inputs['tel2'] . $inputs['tel3'];

    // DB へ保存
    \App\Models\Contact::create([
        'last_name'     => $inputs['last_name'],
        'first_name'    => $inputs['first_name'],
        'gender'        => $inputs['gender'],
        'email'         => $inputs['email'],
        'tell'          => $tel,
        'address'       => $inputs['address'],
        'building'      => $inputs['building'],
        'category_id'   => $inputs['category'],
        'detail'        => $inputs['content'],
    ]);

    // セッション削除（2重送信防止）
    $request->session()->forget('contact');

    // thanks ページへ
    return view('thanks');
}

    // サンクスページ表示（PG03でデータ保存予定）
    public function thanks(Request $request)
    {
        // ここで保存処理をするのは PG03
        return view('thanks');
    }

    // PG04：管理画面（一覧表示）
    public function admin()
    {
        // 後でデータ取得を追加
        return view('admin');
    }

    // PG05：検索
    public function search(Request $request)
    {
        // 後で検索ロジックを追加
        return view('admin');
    }

    // PG06：検索リセット
    public function reset()
    {
        // 後でリセットロジック追加
        return redirect('/admin');
    }

    // PG07：削除処理
    public function delete(Request $request)
    {
        // 後で削除ロジックを追加
        return redirect('/admin');
    }

    // PG08：ユーザー登録画面
    public function register()
    {
        return view('register');
    }

    // PG09：ログイン画面
    public function login()
    {
        return view('login');
    }

    // PG10：ログアウト処理
    public function logout()
    {
        // 後でログアウト処理追加
        return redirect('/login');
    }

    // PG11：CSVエクスポート
    public function export()
    {
        // 後でCSV出力ロジック追加
        return response()->json(['message' => 'CSV export placeholder']);
    }
}
