<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradoRequest extends FormRequest
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
        return [
			'titulo' => 'required|string',
			'descripcion' => 'required|string',
			'mes' => 'required|string',
			'gestion' => 'required|string',
			'instituto' => 'required|string',
			'ciudad_pais' => 'required|string',
			'folio_g' => 'string',
			'titulo1' => 'string',
			'descripcion1' => 'string',
			'mes1' => 'string',
			'gestion1' => 'string',
			'instituto1' => 'string',
			'ciudad_pais1' => 'string',
			'folio_g1' => 'string',
			'titulo2' => 'string',
			'descripcion2' => 'string',
			'mes2' => 'string',
			'gestion2' => 'string',
			'instituto2' => 'string',
			'ciudad_pais2' => 'string',
			'folio_g2' => 'string',
        ];
    }
}
