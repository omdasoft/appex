<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class exhibitorReservationRequest extends FormRequest
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
            'hall' => 'required',
            'wing' => 'required',
            'wing_type' => 'required',
            'area' => 'required|digits_between:1,4',
            'company' => 'required|string|max:100',
            'work_nature' => 'required|string|max:200',
            'logo' => 'required_without:id|image|mimes:jpg,png,jpeg,PNG|max:2048',
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:100',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:100'
        ];
    }
}
