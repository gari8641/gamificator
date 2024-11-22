<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use App\Models\Point;

class NumberController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    //
    public function index()
    {
        return view('index');
    }

    public function show(Request $request)
    {
        // リクエストから数字を取得
        $number = $request->input('number');

        // ランダムな数値を掛ける（範囲: -1 ～ 6）
        $number = $number * rand(-1, 6);

        // 現在ログインしているユーザーを取得
        $user = Auth::user();

        // ユーザーがログインしている場合のみ処理を行う
        if ($user) {
            // points テーブルにデータを挿入
            Point::create([
                'point' => $number,       // ランダムな値
                'user_id' => $user->id,   // ログイン中のユーザーID
            ]);
        }

        // ユーザーのスコアを取得（任意のサービス）
        $score = $this->userService->getUserScore();

        // ビューへデータを渡して表示
        return view('index', compact('number', 'score'));
    }

}
