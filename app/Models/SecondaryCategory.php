<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrimaryCategory;
use App\Models\Product;

class SecondaryCategory extends Model
{
    use HasFactory;

    public function Primary() 
    {
        return $this->belongsTo(PrimaryCategory::class);
    }

    public function Product() 
    {
        return $this->hasMany(product::class);
    }
}
