<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coisa extends Model
{
    use HasFactory;

    protected $fillable = ['nome','user_id'];

}
