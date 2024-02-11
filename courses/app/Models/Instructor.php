<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'rate'

    ];


    public function getCourses()
    {

        return $this->hasMany(Courses::class, 'instructor_id', 'id')->get();
    }
}
