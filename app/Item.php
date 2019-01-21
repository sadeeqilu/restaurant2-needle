<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Item extends Model
{

    protected $fillable = [
        'category', 'type', 'item', 'price', 'mins_to_prepare',
    ];
    
    public function orders(){
      return this->belongsToMany(Order::class);
    }
}
