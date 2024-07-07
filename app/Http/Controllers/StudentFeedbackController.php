<?php

namespace App\Http\Controllers;

use App\Models\student_feedback;
use Illuminate\Http\Request;

class StudentFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Student_feedback()
    {
       return view('AdminView.student-feedback');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student_feedback $student_feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student_feedback $student_feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student_feedback $student_feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student_feedback $student_feedback)
    {
        //
    }
}
