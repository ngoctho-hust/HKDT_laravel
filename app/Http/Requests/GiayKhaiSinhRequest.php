<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiayKhaiSinhRequest extends FormRequest
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
            'ten_cha' => 'required',
            'ten_me' => 'required',
            'noi_dang_ky' => 'required',
            'ngay_dang_ky' => 'required',
            'nhankhau_id' => 'required',
        ];
    }
}
