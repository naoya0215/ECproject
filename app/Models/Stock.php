<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    //よく処理が発生するトランザクションテーブル
    protected $table = 't_stocks';

    protected $fillable = [
        'product_id',
        'quantity'
    ];
}
