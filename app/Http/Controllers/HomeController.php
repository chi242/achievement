<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Goal;
use App\Http\Requests\DiaryRequest;
use App\Http\Controllers\Controller;
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
        return view('index')->with(['goals' => $goal->orderby('id','desc')->first()])->with(['diaries' => $diary->get()]); 
    }
}
