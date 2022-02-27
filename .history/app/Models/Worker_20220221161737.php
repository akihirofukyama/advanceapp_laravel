<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

     protected $fillable = ['name', 'email', 'password'];

    public static $rules = array(
        'name' => 'required|stiring|min:0|max:191',
        'email' => 'required|min:0|max:191',
        'password' => 'required|min:8|max:191'
    );
}
