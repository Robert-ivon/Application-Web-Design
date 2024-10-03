<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'course_cover', 'content', 'robotics_kit'];

    // Relationship to groups
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'course_group', 'course_id', 'group_id');
    }
}