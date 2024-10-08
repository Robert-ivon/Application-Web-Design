<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role'];

    // Relationship to groups
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'student_group', 'student_id', 'group_id');
    }
}
