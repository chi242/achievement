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
     
    // ホーム画面
    public static function index(Goal $goal)
    {
        $maingoal = \App\Models\Goal::where('user_id',Auth::id())->orderby('id','desc')->first(['maingoal']);
        
        // メインゴールの値の有無で条件分岐
        // データがあればメインゴールの内容を表示し、なければ「未記入と表示する」
        if($maingoal == null || $maingoal['maingoal'] == ""){
        $maingoal['maingoal'] = "未記入";
        } 
        return view('index',['maingoal' => $maingoal]);
    }
    
    // ログアウト処理
    public function getLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}



