<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;

class HomeController extends Controller
{
    public function index()
    {
        //get all the courses
        $courses = Course::all();

        return view('home', compact('courses'));
    }
}
