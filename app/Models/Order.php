<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['tracking_code', 'user_id', 'address_id', 'price', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
