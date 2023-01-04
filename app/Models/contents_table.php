<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contents_table extends Model
{
    use HasFactory;
    // テーブル名
    protected $table = 'contents_table';
    // 可変項目
    protected $fillable = [
        'title', 
        'author',
        'level',
        'category',
        'time',
        'style',
        'language',
        'detail',
        'link',
    ];
}
