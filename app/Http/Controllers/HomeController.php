<?php

namespace App\Http\Controllers;


use App\Section;
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
        $current_user = auth()->user();
        if ($current_user->admin) {
            $sections = Section::orderBy('position')->get();
            return view('dashboards.admin',compact('sections'));
        };
        return view('dashboards.user');
    }


}
