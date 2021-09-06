<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use Auth;

class CollectionController extends Controller
{
    public function index(){
        $goals = Goal::orderby('id','desc')->get();
        // 表示用
        // $favorite_number = Goal::where('user_id',Auth::id())->select('maingoal')->count();
        $favorite_number = Goal::where('favorite',1)->count();
        // dd($favorite_number);
        // $my_favorite = Goal::select('favorite')->get();
        $my_favorite = Goal::where('user_id',Auth::id())->select('favorite')->get(); 
        
        return view('collection/index',['goals' => $goals,'favorite_number' => $favorite_number]);
    }


    public function getJson_favorite(){
            $favorite_number = Goal::where('user_id',Auth::id())->get();
            // dump($achievement_plans);
            // return response()->json(compact('achievement_plans','unreflection_plans'));
            // dd($favorite_number);
            return response()->json(compact('favorite_number'));
    }
}

//自分用(Auth::user_id)
    // 初期(get_collection)
    //planのfavotite=1のとき
    // status==true
    
    //planのfavotite=0のとき
    // status==false

//みんな用
    // 初期(get_collection)
    // $favoriteNumber = Plan::where('favorite',1)->count();
    
    //自分がclickしたらgetJsonを呼び出す
        //  status==true()かplanのfavotite=1のとき
        // $favoriteNumber -1
        
        //  status==true()かplanのfavotite=0のとき
        // $favoriteNumber +1
        
