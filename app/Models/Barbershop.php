<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model
{
    use HasFactory;

    public function bookings() { 
        return $this->hasMany(Booking::class); 
    }
    
    public function services() { 
        return $this->hasMany(Service::class);
    }
}
