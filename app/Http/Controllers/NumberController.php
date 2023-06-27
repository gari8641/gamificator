<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function show(Request $request)
    {
        $number = $request->input('number');

        //ランダムな数をかける
        $number = $number * rand(-1,6);

        return view('index', compact('number'));
    }
}
