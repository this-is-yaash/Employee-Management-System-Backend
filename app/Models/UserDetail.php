<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    protected $fillable = ['id','user_name', 'email','password','role','designation', 'phone_number', 'salary', 'age', 'dob','image'];
}
