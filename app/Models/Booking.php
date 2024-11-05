<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function barbershop() { 
        return $this->belongsTo(Barbershop::class); 
    } 
    
    public function service() { 
        return $this->belongsTo(Service::class); 
    } 
    
    public function user() { 
        return $this->belongsTo(User::class); 
    }
}
