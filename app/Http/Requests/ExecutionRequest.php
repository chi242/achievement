<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExecutionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'execution' => 'required|string|max:300',
        ];
    }
}