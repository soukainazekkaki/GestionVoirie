<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjoutVoirie extends FormRequest
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

        //pour utiliser ces régles on doit passer le nom de request en argument de la fonction ajout
        return [
            'nomcommune' => 'required',
            'titre' => 'required',
            'description' => 'required',
            'nomresponsable' =>  'required',
            'ville' => 'required',
             'x' => 'required',
             'y' => 'required',
             
        ];
    }
}
