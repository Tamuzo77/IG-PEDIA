<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return \view('admin.dashboard');
    }

    public function categories()
    {
        $categories= Category::all();
        if(request()->is('admin/categories-list'))
        {
            return \view('admin.categories.list', compact('categories'));
        }
        return \view('admin.categories.grid',compact('categories'));
    }

    public function courses()
    {
        if(request()->is('admin/courses-list'))
        {
            return \view('admin.courses.list');
        }
        return \view('admin.courses.grid');
    }


}
