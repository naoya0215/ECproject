<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Shop;
use App\Models\Product;
use App\Models\Notice;

class Admin extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shop()
    {
        //hasOneで1対1の関係でリレーション
        //Shopを指定
        return $this->hasOne(Shop::class);
    }

    public function Product()
    {
        //hasOneで1対1の関係でリレーション
        //Shopを指定
        return $this->hasOne(Product::class);
    }

    public function Notice()
    {
        //hasOneで1対1の関係でリレーション
        //Shopを指定
        return $this->hasOne(Notice::class);
    }
}
