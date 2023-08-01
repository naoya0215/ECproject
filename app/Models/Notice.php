<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\User;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'image',
        'information',
    ];

    public function admin()
    {
        //belongsToでオーナーを指定
        //php artisan tinkerで繋がりを確認
        return $this->belongsTo(Admin::class);
    }
}
