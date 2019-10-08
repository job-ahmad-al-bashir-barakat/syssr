<?php

namespace Modules\Members\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'   => "required|max:255",
            'email' => [
                'required',
                Rule::unique('members')->ignore(\Auth::id()),
            ],
            'first_name' => "required|max:255",
            'last_name'  => "required|max:255",
            'birth_date' => "required|date",
            'gender'     => "required|max:1",
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
