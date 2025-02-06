<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'trainings';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
    ];

    // If you want to use custom timestamps, you can define them like this:
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
