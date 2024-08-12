<?php
namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        $lessonId = $request->input('lesson_id');
        $enrollmentId = $request->input('enrollment_id');

        $enrollment = $user->enrollments()->where('id', $enrollmentId)->first();

        if ($enrollment) {
            // Find or create the progress record
            $progress = Progress::updateOrCreate(
                [
                    'enrollment_id' => $enrollment->id,
                    'lesson_id' => $lessonId,
                ],
                [
                    'is_completed' => $request->input('completed') ? 1 : 0,
                ]
            );

            return response()->json(['success' => true, 'message' => 'Progress updated successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'Enrollment not found!'], 404);
    }

    public function dashboard()
    {
        $user = auth()->user();
        $enrollments = $user->enrollments()->with('course.lessons', 'progress')->get();

        return view('dashboard', compact('enrollments'));
    }
}
