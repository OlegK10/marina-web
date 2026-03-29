<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * List all active courses.
     */
    public function index(): View
    {
        $courses = Course::active()->orderBy('sort_order')->get();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show a single course by slug.
     */
    public function show(string $slug): View
    {
        $course = Course::active()->where('slug', $slug)->firstOrFail();

        return view('courses.show', compact('course'));
    }
}
