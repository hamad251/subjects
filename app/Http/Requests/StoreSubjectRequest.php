<?php

namespace App\Http\Requests;

use App\Models\Subject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subject_create');
    }

    public function rules()
    {
        return [
            'title'                   => [
                'string',
                'min:3',
                'max:500',
                'required',
            ],
            'department'              => [
                'required',
            ],
            'category'                => [
                'required',
            ],
            'is_it_urgent'            => [
                'string',
                'nullable',
            ],
            'description'             => [
                'string',
                'nullable',
            ],
            'is_it_board_powers_text' => [
                'string',
                'nullable',
            ],
            'time'                    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
