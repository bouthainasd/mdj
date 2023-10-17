<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actvs extends Model
{
    protected $fillable = [
        'name-act',
        'employees_id',
        'type_actvs',
        'participants',
        
    ];
    use HasFactory;
}
