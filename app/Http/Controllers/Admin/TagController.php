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
        $tag = Crypt::decrypt($tag);
        $tag = Tag::find($tag);
        return \view('admin.tags.details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }

}
