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
        $achievement_plans = Plan::where('user_id',Auth::id())
                ->where('status','>=',0)
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        dump(Auth::id());        
        $unreflection_plans = Plan::where('user_id',Auth::id())
                ->where('reflection_content','未記入')
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        dump($achievement_plans);
        return view('reminder/index',compact('achievement_plans','unreflection_plans'));
        
        
    }
    
    public function getJson_achievement($status){
        $achievement_plans = Plan::where('user_id',Auth::id())
                ->where('status','>=',$status)
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        // dump(Auth::id());        
        return response()->json(compact('achievement_plans'));
    }


    public function getJson_unreflection(){
        $unreflection_plans = Plan::where('user_id',Auth::id())
                ->where('reflection_content','未記入')
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        // dump($achievement_plans);
        // return response()->json(compact('achievement_plans','unreflection_plans'));
        return response()->json(compact('unreflection_plans'));
    }
    
    public function getJson_reflection_page(){
        $unreflection_plans = Plan::where('user_id',Auth::id())
                ->where('reflection_content','未記入')
                ->orderby('selected_date','desc')
                ->orderby('id','desc')
                ->get();
        // dump($achievement_plans);
        // return response()->json(compact('achievement_plans','unreflection_plans'));
        return response()->json(compact('unreflection_plans'));
}
}