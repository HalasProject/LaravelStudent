<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Note;

class NoteRequest extends FormRequest
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
             'annes' => 'required',
             'section' => 'required',
             'groupe' => 'required',
             'module_name' => 'required',
             'Type_note' => 'required',
             'creator_name' => 'required',
             'remarque' => 'min:10'
        ];
    }
}
