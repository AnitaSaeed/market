<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
      'title',
      'image',
      'active'
    ];
    protected $softDelete = true;


    public function product(){
        return $this->belongsToMany(Product::class , 'category_products');
    }
}
