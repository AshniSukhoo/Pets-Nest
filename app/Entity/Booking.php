<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'description',
        'appointment_date',
        'service_name',
    ];


}
