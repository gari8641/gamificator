<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ログインユーザー取得のため
use Illuminate\Support\Facades\Auth;
//use App\Models\Point;
use App\Point;



class GamiController extends Controller
{
    //
  public function index()
  {

        // 現在ログインしているユーザーのIDを取得
        $user_id = Auth::id();

        // ユーザーのポイントを合計
        $score = $user_id ? Point::where('user_id', $user_id)->sum('point') : 0;

        return view('index', compact('user_name', 'score'));
  }

}
