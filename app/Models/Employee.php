<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Make sure to import Carbon

class Employee extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'employees';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'department',
        'hire_date',
        'email',
        'phone',
        'address',
    ];

    // Cast hire_date to Carbon instance
    protected $dates = [
        'hire_date',
    ];

    // If you want to use custom timestamps, you can define them like this:
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
