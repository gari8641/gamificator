<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamiController extends Controller
{
    //
  public function index()
  {
    $user = 'ほげ';
    $score = '点数';

    return view('index', compact('user', 'score'));
  }
}
