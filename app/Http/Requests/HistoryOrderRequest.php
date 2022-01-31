<?php

namespace App\Http\Requests;

use App\Traits\CustomErrorMessage;
use Illuminate\Foundation\Http\FormRequest;

class HistoryOrderRequest extends FormRequest
{
    use CustomErrorMessage;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'start_date'    =>  'required',
            'end_date'      =>  'required',
        ];
    }
}
