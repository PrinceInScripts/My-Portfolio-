<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('service');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blogDetails($id)
    {
        return view('blog-details', ['id' => $id]);
    }
    public function project()
    {
        return view('project');
    }
    public function projectDetails($id)
    {
        return view('project-details', ['id' => $id]);
    }
  
    public function home()
    {
        return view('home');
    }
}
