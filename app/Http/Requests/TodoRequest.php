<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'todolist' => 'required|string|max:300',
        ];
    }
}