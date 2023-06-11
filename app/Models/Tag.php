<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsToMany(Category::class, 'categories_tags', 'tag_id', 'category_id');
    }
}
