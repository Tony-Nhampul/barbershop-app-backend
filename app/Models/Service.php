<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function barbershop() { 
        return $this->belongsTo(Barbershop::class); 
    } 
    
    public function bookings() { 
        return $this->hasMany(Booking::class); 
    }
}
