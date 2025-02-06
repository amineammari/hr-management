<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceEvaluation extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'performance_evaluations';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'employee_id',
        'score',
        'comments',
        'evaluation_date',
    ];

    // Define relationships
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    // If you want to use custom timestamps, you can define them like this:
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
