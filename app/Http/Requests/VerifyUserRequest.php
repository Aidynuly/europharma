<?php

namespace App\Http\Requests;

use App\Models\Car;
use App\Traits\CustomErrorMessage;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VerifyUserRequest extends FormRequest
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
            'name'          =>  'required',
            'surname'       =>  'required',
            'date'          =>  'required',
            'iin'           =>  'required',
            'doc_number'    =>  'required',
            'deadline'      =>  'required',
            'image_1'       =>  'required',
            'image_2'       =>  'required',
            'person_image'  =>  'required',
            'mark_model_id'        =>  'required',
            'car_date'      =>  'required',
            'dimensions'    =>  'required',
            'number'        =>  'required',
            'registration'  =>  'required',
            'image'         =>  'required',
        ];
    }
}
