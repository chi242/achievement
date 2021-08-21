<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalRequest extends FormRequest
{
    public function rules()
    {
        return [
            'maingoal' => 'required|string|max:300',
            'measurable' => 'required|string|max:300',
            'actionable'=> 'required|string|max:300',
            'competent'=> 'required|string|max:300',
        ];
    }
}