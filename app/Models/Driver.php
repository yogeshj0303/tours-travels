<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'driver_name',
        'driver_contact',
        'driver_email',
        'driver_address',
        'driver_zip',
        'driver_state',
        'driver_district',
        'joining_date',
        'driver_salary',
        'driver_licence',
        'driver_id',
        'driver_photo',
    ];
}
