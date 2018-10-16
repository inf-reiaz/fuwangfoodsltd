<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
        // return view('admin.layout.app');
    }
    
    public function Resume()
    {
        $resumes = Resume::latest()->get();
        return view('admin.pages.resume',compact('resumes'));
    }
    
    
}
