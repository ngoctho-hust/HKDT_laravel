<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanKhauRequest extends FormRequest
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
            'ho_ten' => 'required',
            'gioi_tinh' => 'required',
            'ngay_sinh' => 'required|date',
            'noi_sinh' => 'required',
            'dan_toc' => 'required',
        ];
    }
}
