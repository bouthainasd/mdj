<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'name',
        'address',
        'mobile',
        'specialty',
        
    ];




    use HasFactory;
}