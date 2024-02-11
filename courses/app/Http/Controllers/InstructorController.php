<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instructors = Instructor::all();
        $context = [
            'count' => Instructor::count(),
            'data' => $instructors

        ];
        return $context;
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
    public function store(StoreInstructorRequest $request)
    {
        //
        return  Instructor::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'rate' => $request->rate,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
        $data = [
            'instructor' => $instructor,
            'courses' => $instructor->getCourses()
        ];
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        //
        return $instructor->update([
            'name' => $request->name ?? $instructor->name,
            'phone' => $request->phone ?? $instructor->phone,
            'rate' => $request->rate ?? $instructor->rate,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
        return $instructor->delete();
    }
}
