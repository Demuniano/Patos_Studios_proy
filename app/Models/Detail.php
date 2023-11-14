<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'cant',
        'unitp',
        'totalp',
    ];
    use HasFactory;
    public function order(){
        return $this -> belongsTo(Order::class);
    }

    public function product(){
        return $this -> belongsTo(Product::class);
    }
    
}
