<?php

namespace App\Http\Controllers;

use App\Models\Models\MyParent;
use App\Models\Teacher;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teachers = Teacher::count();
        $parents = MyParent::count();
        return view('admin/dashboard', compact('teachers','parents'));    
    }
}
