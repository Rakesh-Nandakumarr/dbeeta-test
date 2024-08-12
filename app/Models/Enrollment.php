<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
    ];

    public function Student()
    {
        return $this->belongsTo(User::class , 'student_id')->where('role', 'student');
    }

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function Progress()
    {
        return $this->hasMany(Progress::class);
    }
}
