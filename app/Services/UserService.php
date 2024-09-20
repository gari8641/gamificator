<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Point;

class UserService
{
    public function getUserScore()
    {
        $user_id = Auth::id();
        return $user_id ? Point::where('user_id', $user_id)->sum('point') : 0;
    }
}
