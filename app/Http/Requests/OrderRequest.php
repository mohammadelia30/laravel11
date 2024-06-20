<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "sender_name" => "required|min:3|max:50",
            'receiver' => 'required|min:3|max:50',
            'code' => 'required|min:1|max:10',
            'date' => 'required',
            'time' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'sender_name.required'=> 'نام فرستنده الزامی است',
            'sender_name.min'=> 'نام فرستنده کمتر از ۳ حرف است',
            'sender_name.max'=> 'نام فرستنده بیش از حد مجاز است',
            'receiver.required'=> 'نام گیرنده الزامی است',
            'receiver.min'=> 'نام گیرنده کمتر از ۳ حرف است',
            'receiver.max'=> 'نام گیرنده بیش از حد مجاز است',
            'cond.required'=>'کد سفارش الزامی است',
            'code.min'=> 'کد سفارش باید حداقل شامل یک رقم باشد',
            'code.max'=> 'کد سفارش بیش از حد مجاز می باشد',
            'date'=> 'تاریخ تحویل انتخاب نشده است',
            'time'=> 'زمان دریافت انتخاب نشده است'
        ];
    }
}
