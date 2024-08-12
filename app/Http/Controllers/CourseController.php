<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;

class CourseController extends Controller
{
    public function show(Course $course)
    {
        $user = auth()->user();
        $isEnrolled = false;
    
        if ($user && $user->role === 'student') {
            $isEnrolled = $course->enrollments()->where('student_id', $user->id)->exists();
        }
    
        return view('course.show', compact('course', 'isEnrolled'));
    }

    public function enroll(Course $course)
    {
        $user = auth()->user();

        // Check if the user is already enrolled
        $isEnrolled = $course->enrollments()->where('student_id', $user->id)->exists();

        if (!$isEnrolled) {
            Enrollment::create([
                'course_id' => $course->id,
                'student_id' => $user->id,
            ]);

            // Flash a success message to the session
            return redirect()->route('course_show', $course->id)
                ->with('success', 'Enrollment successful!');
        }

        return redirect()->route('course_show', $course->id);
    }
}
