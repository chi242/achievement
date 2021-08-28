<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Models\Date;
use App\Models\Execution;
use Auth;

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
    public static function index(Goal $goal)
    {
        if(isset($goal)){
        $goal = \App\Models\Goal::where('user_id',Auth::id())->orderby('id','desc')->first();
        }else{
            echo 'Maingoalは未設定です。';
        }
        return view('index',['goal' => $goal]);
        
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}



