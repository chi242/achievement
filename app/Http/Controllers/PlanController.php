<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Http\Requests\PlanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; //認証モデルを使用する

class PlanController extends Controller
{
    // Plan記入画面
    public function create(Plan $plan)
     {
        return view('plan/create')->with(['plan' => $plan]);
    }
    
    // Plan保存処理
    public function store(Request $request,Plan $plan)
    {   
        $plan = \App\Models\Plan::orderby('id','desc')->first();
        $input = $request['plan'];
        $plan->fill($input)->save();
        
        $plan = \App\Models\Plan::where('user_id',Auth::id());
        return redirect('/planlists');
    }

    // Plan詳細内容編集画面
    public function edit(Plan $plan)
    {
        User::userAuthenticate($plan->user_id);
        return view('plan/edit')->with(['plan' => $plan]);
    }
    
    // Plan詳細内容更新処理
    public function update(Request $request,Plan $plan)
    {
        // $input= $request['plan'];
        // $plan->fill($input)->save();
        return redirect('/planlists'); 
    }
}
