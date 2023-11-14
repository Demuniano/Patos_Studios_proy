<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'date',
    ];
    use HasFactory;
    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function product(){
        return $this -> belongsTo(Product::class);
    }
    public function detail(){
        return $this -> hasMany(Detail::class);
    }
}
