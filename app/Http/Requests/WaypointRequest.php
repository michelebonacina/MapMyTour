<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaypointRequest extends FormRequest
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
        // standard validation
        $validate = [
            'name' => 'required',
            'latitude' => 'required|min:-90|max:90',
            'longitude' => 'required|min:-180|max:180'
        ];
        // waypoint update validation
        $previous = request()->session()->get('_previous')['url'];
        if (substr_compare($previous, 'edit', -strlen('edit')) === 0) {
            // arrives from edit form
            $validate['id'] = 'required';
        }
        return $validate;
    }
}
