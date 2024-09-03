<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Research extends Model
{
    use HasFactory;
    protected $fillable = ["slug", "title", "image", "description"];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($research) {
            $research->slug = static::generateUniqueSlug($research->title);
        });
    }

    /**
     * Generate a unique slug for the research.
     *
     * @param  string  $title
     * @return string
     */
    protected static function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}
