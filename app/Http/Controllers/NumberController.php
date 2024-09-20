<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

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
        $number = $request->input('number');

        // ランダムな数をかける
        $number = $number * rand(-1, 6);

        // ユーザーのスコアを取得
        $score = $this->userService->getUserScore();

        return view('index', compact('number', 'score'));
    }
}
