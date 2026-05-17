<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    // 編集可能なカラムを指定
    protected $fillable = ['point', 'user_id'];

    // 自動管理するタイムスタンプを有効化 (created_at, updated_at)
    public $timestamps = true;
}
