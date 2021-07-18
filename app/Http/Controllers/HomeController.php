<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Goal;
use App\Models\Review;

use App\Http\Requests\TodoRequest;
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
    public static function index(Goal $goal ,Todo $todo,Review $review)
    {
        return view('index')->with(['goal' => $goal->orderby('id','desc')->first()])->with(['todo' => $todo->get()]);
        
        
        $totalNumbers = DB::table('todos_table')->count('todolist')->get();
        
        $achievementNumbers = DB::table('reviews_table')-> count('evaluation')->get();
    }
    
    
}

