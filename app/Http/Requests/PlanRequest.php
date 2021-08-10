<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    public function rules()
    {
        return [
            'plan_content' => 'required|string|max:300',
        ];
    }
}