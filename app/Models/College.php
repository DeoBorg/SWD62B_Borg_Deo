<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    //to enable mass assignment
    protected $fillable = ['name', 'address'];

    //Section 7 ; A college can have multiple students
    public function students(){
        return $this->hasMany(Student::class);
    }
}
