<?php

namespace App\Http\Controllers;

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
        if(request()->is('admin/categories-list'))
        {
            return \view('admin.categories.list');
        }
        return \view('admin.categories.grid');
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
