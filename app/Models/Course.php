<?php

namespace App\Models;

use App\Models\Pdf;
use App\Models\Tag;
use App\Models\Video;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'courses_tags', 'course_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function resources()
    {
        return [
            'pdfs' => $this->hasMany(Pdf::class, 'course_id'),
            'videos' => $this->hasMany(Video::class, 'course_id' ),
            'projects' => $this->hasMany(Project::class, 'course_id'),
        ];
    }

}
