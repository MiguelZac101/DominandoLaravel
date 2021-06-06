<?php
//php artisan make:request CreateProjectRequest
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //se valida si el usuario puede utilizar este form
        //se puede preguntar por el tipo de usuario
        // $this->user()->isAdmin()
        //si devuelve verdadero para a verificar las reglas de validación
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
            'title' => 'required',
            'url' => 'required',
            'descripcion' => 'required'
        ];
    }
    //mensajes personalizados
    public function messages(){
        return [
            'title.required' => "El proyecto necesita un titulo"
        ];
    }
}
