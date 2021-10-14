<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModulesData extends FormRequest
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
            'Nom_Module'=> 'required',

            'duree' => 'required',
            
            'description' => 'required',
            
            ];
    }
    public function messages()

    {

    return [
        'Nom_Module.required' => "Le nom de module est obligatoire",


    'duree.required' => "La duree est obligatoire",

    'description.required' => "La description du cours est obligatoire"

];
}
}
