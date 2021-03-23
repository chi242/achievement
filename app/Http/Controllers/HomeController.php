<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Goal;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Goal $goal , Diary $diary)
    {
        return view('index')->with(['goal' => $goal])->with(['diary' => $diary])->with(['diaries' => $diary]); 
    }
}