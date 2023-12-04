<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
        $id = Auth::user()->id; /*auth()->user()->id;*/
        return [
            'state_id' => 'required|numeric|exists:states,id',
            'name' => 'required|min:6',
            'email' => ['required', 'email', Rule::unique('users')->ignore($id)],
        ];
    }
}
