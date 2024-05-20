<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'numero',
        'status',
        'data_nascimento',
    ];
}
