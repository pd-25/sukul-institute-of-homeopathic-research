<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
class CourseController extends Controller
{
    // Display a listing of the courses
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Show the form for creating a new course
    public function create()
    {
        return view('admin.courses.create');
    }

    // Store a newly created course in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    // Show the form for editing a specific course
    public function edit($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('admin.courses.edit', compact('course'));
    }

    // Update the specified course in the database
    public function update(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
    
        // Validate the incoming data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        // Update the course data
        $course->update($validatedData);
    
        // Redirect back with a success message
        return redirect()->route('courses.index')->with('msg', 'Course updated successfully!');
    }
    

    // Remove the specified course from the database
    public function destroy($slug)
    {
        // Find the course by slug
        $course = Course::where('slug', $slug)->firstOrFail();
        
        // Delete the course
        $course->delete();
    
        // Redirect to the index page with a success message
        return redirect()->route('courses.index')->with('msg', 'Course deleted successfully!');
    }
    

}
