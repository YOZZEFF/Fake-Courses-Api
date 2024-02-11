<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'price', 'description', 'instructor_id'

    ];
    public function getInstructors_info()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }
}
