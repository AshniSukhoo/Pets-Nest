<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_name',
        'email',
        'subject',
        'description'
    ];


}
