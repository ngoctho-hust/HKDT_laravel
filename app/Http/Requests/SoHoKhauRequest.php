<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoHoKhauRequest extends FormRequest
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
            'so_nha' => 'required',
            'ngay_cap' => 'required|date',
            'pho_ap' => 'required',
            'phuong_xa' => 'required',
            'quan_huyen' => 'required',
        ];
    }
}
