<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Plan;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoalRequest;
use Illuminate\Http\Request;
use Auth;

class GoalController extends Controller
{
    // 目標データ画面
    public function index(Goal $goal)
    {
        $goal = Goal::where('user_id',Auth::id())->orderby('id','desc')->select('maingoal','measurable','actionable','competent')->first();
        // Goalテーブルのデータの有無で条件分岐
        // データがないときすべて「未記入」と表示し、あるときはデータの中身を表示
        if(!isset($goal)){
            $maingoal = '未記入';
            $measurable = '未記入';
            $actionable = '未記入';
            $competent = '未記入';
            $goal_array = array($maingoal,$measurable,$actionable,$competent);
        }else{
            $maingoal = $goal->orderby('id','desc')->value('maingoal');
            $measurable = $goal->orderby('id','desc')->value('measurable');
            $actionable = $goal->orderby('id','desc')->value('actionable');
            $competent = $goal->orderby('id','desc')->value('competent');
            $goal_array = array($maingoal,$measurable,$actionable,$competent);
        }
        
        return view('goal/index',compact('goal_array'))->with(['goal' => $goal]);
    }
    
    // 目標設定画面
    public function create(Goal $goal)
    {
        return view('goal/create');
    }
    
    // 目標設定保存
    public function store(Request $request , Goal $goal)
    {
        $goal = new \App\Models\Goal;
        $goal->user_id = Auth::id();
        $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals');
    }
}




 



 