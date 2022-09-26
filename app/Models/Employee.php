<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'dob','updated_at', 'join_date'];
    protected $fillable = ['user_id',  'emp_id', 'email',  'first_name', 'middle_name', 'last_name', 'ext', 'sex', 'dob', 'join_date', 'desg', 'department_id'];
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function department() {
        // return $this->hasOne('App\Department');
        return $this->belongsTo('App\Models\Department');
    }

   
}
