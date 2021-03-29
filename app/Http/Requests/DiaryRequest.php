<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'diary.todo' => 'required|string|max:300',
            'diary.review' => 'required|string|max:300',
        ];
    }
}