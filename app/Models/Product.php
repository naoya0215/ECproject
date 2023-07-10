<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;
use App\Models\Stock;
use App\Models\SecondaryCategory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'information',
        'price',
        'sort_order',
        'secondary_category_id',
        'image',
    ];

    public function admin()
    {
        //belongsToでオーナーを指定
        //php artisan tinkerで繋がりを確認
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    //hasMany関数  1対多のリレーション 
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

}
