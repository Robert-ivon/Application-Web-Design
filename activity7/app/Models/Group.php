<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level'];

    // Relationship to users (students)
    public function students()
    {
        return $this->belongsToMany(User::class, 'student_group', 'group_id', 'student_id');
    }

    // Relationship to courses
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_group', 'group_id', 'course_id');
    }
}
