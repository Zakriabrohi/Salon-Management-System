<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // Yeh fields database mein save hona lazmi hain
    protected $fillable = ['name', 'phone', 'service', 'date', 'time', 'message', 'status'];
}
