<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatsManagmentRequest extends FormRequest
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
        'name' => 'required|max:100',
        'type' => 'required',
        'age' => 'required|max:2',
        'color' => 'required',
        'description' => 'required'
        ];
    }

    public function messages(){

        return [
        'name.required' => 'Wpisz imię kota',
        'type.required' => 'Wybierz rasę kota',
        'name.max' => 'imię nie może być dłuższę niż 100 znaków',
        'age.required' => 'Wiek kota jest wymagany',
        'age.max' => 'Wiek nie może być większy niż 99 lat',
        'color.required' => 'Wybierz kolor futra',
        'description.required' => 'Wpisz krótki opis kota'
        ];

    }

}
