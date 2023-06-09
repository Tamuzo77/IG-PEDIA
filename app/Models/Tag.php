<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cours()
    {
        return $this->belongsToMany(Course::class, 'courses_tags', 'tag_id', 'course_id');
    }

    public function categories()
    {
        return $this->belongsToMany();
    }
}
