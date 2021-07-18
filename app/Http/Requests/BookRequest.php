<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'auth' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'year_start' => 'required|max:4|min:4'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => '*Bạn chưa nhập tên sách.',
            'auth.required' => '*Bạn chưa nhập tên tác giả.',
            'quantity.required' => '*Bạn chưa nhập số lượng cuốn sách.',
            'price.required' => '*Bạn chưa nhập giá cuốn sách.',
            'year_start.required' => '*Bạn chưa nhập năm xuất bản.',
        ];
    }
}
