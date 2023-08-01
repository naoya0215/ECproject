<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Shop extends Model
{
    protected $fillable = [
        'admin_id',
        'name',
        'address',
        'information',
        'image',
    ];

    public function admin()
    {
        //belongsToでオーナーを指定
        //php artisan tinkerで繋がりを確認
        return $this->belongsTo(Admin::class);
    }
}
