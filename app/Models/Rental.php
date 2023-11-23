<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    
    protected $fillable = ['date_rented', 'date_returned', 'car_id', 'renter_id'];

    public function car()
    {
        return $this->belongsTo(Management::class);
    }
}
