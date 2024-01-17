<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{HasOne, HasMany, BelongsTo};
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent_category(){
        return $this->belongsTo(__CLASS__);
    }

    public function child_category(){
        return $this->hasMany(__CLASS__);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }

}
