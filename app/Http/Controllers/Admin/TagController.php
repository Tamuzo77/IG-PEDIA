<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        return \view('admin.tags.table', [
            'tags' => Tag::latest()->paginate(10),
            'increment' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return \view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'tag_name' =>'required|unique:tags,name|min:2|max:10',
            '_token' => 'required'
        ]);
        if($validator->fails())
        {
            
            return redirect()->back()->with('error', 'Tag Name Non Valide');
        }

        $tag = new Tag();
        $tag->name= $request->tag_name;
        $tag->save();

        return \back()->with('success', 'Tag Created Successfully');

        
    }

    /**
     * Display the specified resource.
     */
    public function show($tag)
    {
        //
        $tag = $this->decryptAndFindTag($tag); 

        $tableTag = [];
        foreach($tag->categories as $category)
        {
            $tableTag[] = [
                'id' => $category->id,
                'name' => $category->name,
                'type' => 'category',
            ];
        }

        foreach($tag->course as $course)
        {
            $tableTag []= [
                'id' => $course->id,
                'name' => $course->title,
                'type' => 'course',
            ];
        }
        $increment = 1;
        

        return \view('admin.tags.details', compact('tag', 'tableTag', 'increment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $tag)
    {
        //
        $tag = $this->decryptAndFindTag($tag); 


        return \view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($tag, Request $request)
    {
        //
        $tag = $this->decryptAndFindTag($tag); 


        $validator = Validator::make($request->all(), [
            'tag_name' =>'required|unique:tags,name|min:2|max:10',
            '_token' => 'required'
        ]);

        if($validator->fails())
        {
            
            return redirect()->back()->with('error', 'Tag Name Non Valide');
        }
        $attributes['name'] = $request->tag_name;

        $tag->update($attributes);

        return 
            redirect()->back()->with('success', 'Tag Updated Successfully')
            //\response()->json(['message' => 'Tag Updated Successfully'],200),
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tag)
    {
        //
        $tag = $this->decryptAndFindTag($tag);
        $tag->delete();
        return \redirect()->back()->with('success', 'Tag deleted successfully');

    }

    private function decryptAndFindTag($value)
    {
        $value = Crypt::decrypt($value);
        $value = Tag::find($value);
        return $value;
    }

}
