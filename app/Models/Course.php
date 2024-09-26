<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'slug'];
    protected static function booted()
    {
        static::creating(function ($course) {
            $course->slug = Str::slug($course->title);
        });
    }
}
