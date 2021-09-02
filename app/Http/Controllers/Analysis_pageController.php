<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class Analysis_pageController extends Controller
{
    // 分析画面
    public function index(Plan $plan)
    {
        // planテーブルのレコード数を取得
        $totalNumbers = Plan::where('user_id',Auth::id())->count();
        // 達成度が100％のPlanの数を取得
        $plans = Plan::where('user_id',Auth::id())->where('status','100');
        $statusNumbers = $plans->count();
        
        // Planテーブルにデータが入っているとき
        if($totalNumbers !== 0){
        $rate = $statusNumbers/$totalNumbers*100;
        $round_rate= round($rate).'%';
        }else{
        // Planテーブルが初期値のとき
        $round_rate = 'Planはまだありません。';
        }
        
        $plans = Plan::where('user_id',Auth::id())->orderby('selected_date','desc')->orderby('id','desc')->get();
        
        return view('analysis_page/index',compact('statusNumbers','totalNumbers','round_rate'))->with(['plans' => $plans]);
    }
}

