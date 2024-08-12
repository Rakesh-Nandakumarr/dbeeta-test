<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment_id',
        'lesson_id',
        'is_completed',
    ];  

    public function Enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function Lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}