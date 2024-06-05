<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable=[
        'registration_number',
        'firstName',
        'lastName',
        'departement',
        'hire_date',
        'phone',
        'adress',
        'city',
    ];
}
