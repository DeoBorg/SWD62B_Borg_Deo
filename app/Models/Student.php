<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //to enable mass assignment
    protected $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    //Section 7 ; A student can only be in one college
    public function college(){
        return $this->belongsTo(College::class);
    }
}
