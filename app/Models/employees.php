<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'organizationId',
        'phone_number',
    ];
}
