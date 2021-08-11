<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $casts = [
        'toppings' => 'array' //when we want to work with toppings in application it will cast it to array rather than json string
    ];
}
