<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expens extends Model
{
    protected $fillable = ["id", "amount", "description", "date"];
}
