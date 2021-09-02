<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

use Auth;



class PlanlistController extends Controller
{
    // Planlist画面
    public function index(Plan $plan)
    {
        // Planテーブルのレコードを新しい日の順に10個取得する
        $plans = Plan::where('user_id',Auth::id())->orderby('selected_date','desc')->orderby('id','desc')->limit(10)->offset(0)->get();

        return view('planlist/index',['plans' => $plans]);
    }
}

