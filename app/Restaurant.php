<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
      protected $fillable = [
          'restaurant_name', 'location', 'phonenumber',
      ];
}
