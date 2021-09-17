<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Http\Requests\PlanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class Reflection_pageController extends Controller
{
    // 振り返り記入画面
    public function create(Plan $plan)
    {
        User::userAuthenticate($plan->user_id);
        return view('reflection_page/create')->with(['plan' => $plan]);
    }
    
    // 振り返りの内容と開始時間、取り組み時間、達成度の保存処理
    public function store(Request $request,Plan $plan)
    {   
        $plans = Plan::orderby('id','desc')->first();
        $plans->user_id = Auth::user()->id;
        $plans->reflection_content = $request->reflection_content;
        $plans->reflection_start_time = $request->reflection_start_time;
        $plans->reflection_times = $request->reflection_times;
        $plans->status = $request->status;
        $plans->save();
        
        return redirect('/planlists/' . $plan->id);
    }
    
    // Plan詳細一覧画面
    public function show(Plan $plan)
    {
        return view('reflection_page/show')->with(['plan' => $plan]);
    }
    
    // 振り返り更新処理
    public function update(Request $request)
    {
        $input= $request['reflection'];
        $reflection->fill($input)->save();
        return redirect('/planlists/' . $reflection->id); 
    }
    
    // Planの削除処理
    public function delete(Plan $plan){
        $plan->delete();
        return redirect('planlists');
    }
    
    
}
