<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_details extends Model
{
    use HasFactory;
    protected $fillable = ['employee_name', 'designation', 'phone_number', 'salary', 'age', 'dob'];
}
