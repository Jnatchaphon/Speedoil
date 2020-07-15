<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProRequest extends FormRequest
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
            //
            'name' => 'required',
            'des' => 'required',
            'detail' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ];
    }

    public function messages() {
        return [
            'name.required' => '- กรุณากรอกชื่อเรื่อง',
            'des.required' => '- กรุณากรอกรายละเอียดย่อ',
            'detail.required' => '- กรุณากรอกรายละเอียด',
            'image.mimes' => '- กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png'
        ];
    }
}
