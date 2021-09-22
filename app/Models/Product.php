<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'price',
        'amazing',
        'offer'
    ];
    protected $softDelete = true;

    public function category(){
        return   $this->belongsToMany(Category::class, 'category_products');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
