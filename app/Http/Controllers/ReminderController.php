<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

class ReminderController extends Controller
{
    
    public function index()
    {
        // 達成度に応じた（初期値＝０）Planの取得
        $achievement_plans = Plan::where('user_id',Auth::id())
                ->where('status','>=',0)
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        // 振り返りを書いていないPlanの内容を取得
        $unreflection_plans = Plan::where('user_id',Auth::id())
                ->where('reflection_content','未記入')
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        return view('reminder/index',compact('achievement_plans','unreflection_plans'));
    }
    
    // 達成度に応じたPlanをJson形式で取得
    public function getJson_achievement($status){
        $achievement_plans = Plan::where('user_id',Auth::id())
                ->where('status','>=',$status)
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        return response()->json(compact('achievement_plans'));
    }
}