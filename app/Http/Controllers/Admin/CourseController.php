<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pdf;
use App\Models\Tag;
use App\Models\Video;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
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
        
        return view('admin.courses.create', [
            'tags' => Tag::all(),
            'categories' => Category::where('parent_id', null)->get(),
            'subcategories' =>Category::where('parent_id', '!=', null )->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $attributes = \request()->validate([
            'course_title' => 'required|min:5|max:50',
            'course_description' => 'required|min:8|max:1024',
            'category_id' => 'required',
            'cover_picture' => 'required',
            'tags' => '',
            'preview_video' => ''
        ]);

        if(\request('pdfs'))
        {
            $this->pdfUpload();
        }

        if(\request('videos'))
        {
            $this->videoUpload();
        }

        $attr=[
            'title' => $attributes['course_title'],
            'category_id' => $attributes['category_id'],
            'description' => $attributes['course_description'],
            'cover_photo' => $attributes['cover_picture'],
            'preview_video' => $attributes['preview_video'],
        ];

        $course = Course::create($attr);
       
        $tags = $attributes['tags'];
        $course->tags()->sync($tags);
        return \redirect()->back()->with('success', 'Course created successfully');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function pdfUpload($file=null)
    {
        $pdfs = new Pdf();
        $pdf->name = "";
        $pdf->path = ""; 
    }

    private function videoUpload($file=null)
    {
        $video = new Video();
        $video->name = "";
        $video->path = "";
    }
}
