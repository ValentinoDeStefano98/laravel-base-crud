<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'thumb', 'title', 'description', 'price', 'series', 'sale_date', 'type'
    ];
}
