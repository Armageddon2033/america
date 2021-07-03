<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateUpdateRequest extends FormRequest
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
        $state = $this->route('state');
        return [
            'name' => 'required|string|max:100'.$state->id,
            'capital' => 'required|string|max:75'.$state->id,
            'largest' => 'required|string|max:75'.$state->id,
        ];
    }
}
