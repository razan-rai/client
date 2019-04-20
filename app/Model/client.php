<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = ['name', 'email', 'gender', 'address', 'nationality', 'edu_background', 'dob', 'mode_of_contact', 'phone', 'remember_token'];
}
