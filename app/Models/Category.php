<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'categories_tags', 'category_id', 'tag_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
