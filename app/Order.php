<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Order extends Model
{

    protected $fillable = [
        'payment_type', 'status', 'notes',
    ];

    public function items(){
      return this->belongsToMany(Item::class);
    }
}
