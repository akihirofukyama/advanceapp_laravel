<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{

    protected $fillable = ['start-time', 'end-time', 'work-hours'];

    use HasFactory;
}
