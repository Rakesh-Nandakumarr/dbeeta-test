<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'title',
        'category',
        'description',
    ];

    public function Instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id')->where('role', 'instructor');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}

