<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        return [
        'title_vi' => 'bail|required',
        'data_vi' => 'bail|required',
        'title_en' => 'bail|required',
        'data_en' => 'bail|required',       
        
     
        ];
    }
    public function messages()
    {
        return [
        'title_vi.required' => 'Tiêu đề tiếng việt không được để trống',
        'data_vi.required' => 'Nội dung tiếng việt không được để trống',
        'title_en.required' => 'Tiêu đề tiếng anh không được để trống',
        'data_en.required' => 'Nội dung tiếng anh không được để trống',
        ];
    }
}
