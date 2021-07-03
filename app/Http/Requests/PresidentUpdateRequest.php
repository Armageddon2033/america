<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresidentUpdateRequest extends FormRequest
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
        $president = $this->route('president');
        return [
            'first_name' => 'required|string|max:100'.$president->id,
            'last_name' => 'required|string|max:150'.$president->id
        ];
    }
}
