<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebinarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255', 'min:3'],
            'speaker' => ['required', 'string', 'max:255', 'min:3'],
            'date' => ['required', 'date'],
            'link' => ['required', 'string'],
            'image' => ['required', 'mimes:jpg,jpeg,png'],
        ];
    }
}
