<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class Analysis_pageController extends Controller
{
    public function index(Plan $plan)
    {
        /*planテーブルのレコード数を取得*/
        $totalNumbers = \App\Models\Plan::where('user_id',Auth::id())->count();
        $plans = \App\Models\Plan::where('user_id',Auth::id())->where('status','100');
        $statusNumbers = $plans->count();
    
        if($totalNumbers !== 0){
        $rate = $statusNumbers/$totalNumbers*100;
        $round_rate= round($rate).'%';
        }else{
        $round_rate = 'Planはまだありません。';
        }
        $plans = Plan::where('user_id',Auth::id())->orderby('selected_date','desc')->orderby('id','desc')->get();
        
        return view('analysis_page/index',compact('statusNumbers','totalNumbers','round_rate'))->with(['plans' => $plans]);
    }
}

