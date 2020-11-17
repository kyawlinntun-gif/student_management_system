<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'cne', 'first_name', 'second_name', 'age', 'speciality'
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords($value);
    }

    public function setSecondNameAttribute($value)
    {
        $this->attributes['second_name'] = ucwords($value);
    }

    public function setSpecialityAttribute($value)
    {
        $this->attributes['speciality'] = ucwords($value);
    }
}
