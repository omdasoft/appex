<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{    
    protected $fillable = ['name','email','phone','date','created_at','updated_at'];


    use HasFactory;
}
