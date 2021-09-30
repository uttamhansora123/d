<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'subject',
        'city_id',
    ];
}
