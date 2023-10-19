<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoliticalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'header' => 'required',
            'author' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ];
    }
}
