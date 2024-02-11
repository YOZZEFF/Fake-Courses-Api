<?php

namespace App\Http\Resources;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        return $this->collection->map(function ($course) {
            $attr = [
                'id'=>$course->id,
                'title'=>$course->title,
                'instructor'=>$course->getInstructors_info,
            ];
            return $attr;
        });
    }
}
