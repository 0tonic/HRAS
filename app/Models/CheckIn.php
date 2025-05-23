<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'department', 'image', 'time_in', 'date', 'status',
    ];
}
