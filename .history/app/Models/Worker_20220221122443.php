<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

     protected $fillable = ['name', 'email', 'password'];

    public static $rules = array(
        'name' => 'required|min:0|max:191',
        'email' => 'requires|min:0|max:150',
        'nationality' => 'required'
    );
}
