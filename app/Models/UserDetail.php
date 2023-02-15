<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_info';
    protected $primaryKey = 'id';
    protected $fillable = ['employee_name', 'email', 'designation', 'phone_number', 'salary', 'age', 'dob'];
}
