<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurateur extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'phonenumber',
    ];
}
