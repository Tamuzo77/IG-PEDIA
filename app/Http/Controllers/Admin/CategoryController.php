<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return \view('admin.categories.create', [
            'categories' => Category::where('parent_id', null)->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        
       
        
        $attributes = request()->validate([
            'category_name' =>'required|unique:categories,name|min:3|max:100',
            'category_description' =>'required',
            'tags' => 'required',
            'category_parent' =>''
        ]);

        $attributes['slug'] = Str::slug($attributes['category_name']);
        $attributes['picture'] = 'storage/images/Designer-pana.png';
        
        $attr=[
            'name' => $attributes['category_name'],
            'slug' => $attributes['slug'],
            'description' => $attributes['category_description'],
            'picture' => $attributes['picture'],
            'parent_id' => $attributes['category_parent']?? null,
        ];

        

        $category = Category::create($attr);
        $tags = \request('tags');
        $category->tags()->sync($tags);
        return \redirect()->back()->with('success', 'Category created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
