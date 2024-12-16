<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspecialcRequest extends FormRequest
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
			'gesion_mes_ce' => 'string',
			'evento_ce' => 'string',
			'duracion_ce' => 'string',
			'intitucion_ce' => 'string',
			'folio_ce' => 'string',
        ];
    }
}
