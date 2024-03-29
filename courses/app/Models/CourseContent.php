<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;
    protected $fillable =[
    'title',
    'hours' ,
    'content' ,
    'course_id'
    ];
}
