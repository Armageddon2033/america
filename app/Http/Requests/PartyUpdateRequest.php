<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartyUpdateRequest extends FormRequest
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
        $party = $this->route('party');
        return [
            'name' => 'required|string|max:100'.$party->id,
            'founder' => 'required|string|max:250'.$party->id
        ];
    }
}
