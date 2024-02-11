<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = new CourseCollection(Courses::all());
        return $courses;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoursesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $course)
    {
        // I HAVE A PROBLEM IN THIS FUNCTION
        // dd($course);
        return new Course($course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoursesRequest $request, Courses $course)
    {
        //
        // I have a problem
        return $course->update([
            'title' => $request->title ?? $course->title,
            'price' => $request->price ?? $course->price,
            'description' => $request->description ?? $course->description,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $course)
    {
        //
        return $course->delete();
    }
}
