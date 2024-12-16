<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $nombres
 * @property $apellido_pat
 * @property $apellido_mat
 * @property $estado_civil
 * @property $apellido_casada
 * @property $nacionalidad
 * @property $direccion
 * @property $fecha_nac
 * @property $provincia
 * @property $canton
 * @property $departamento
 * @property $serie_libreta_mil
 * @property $n_libreta_mil
 * @property $nro_matricula
 * @property $tipo_sangre
 * @property $ci
 * @property $emision
 * @property $afp
 * @property $n_n_cua
 * @property $n_seguro
 * @property $telefono
 * @property $celular
 * @property $contacto_emer
 * @property $celular_emer
 * @property $email
 * @property $clave
 * @property $institucion
 * @property $n_cuenta
 * @property $id_grados
 * @property $id_especialcs
 * @property $id_otrocs
 * @property $desde_mes_e
 * @property $desde_gestion_e
 * @property $hasta_mes_e
 * @property $hasta_gestion_e
 * @property $cargo_e
 * @property $nom_empresa_e
 * @property $tel_empresa_e
 * @property $motivo_e
 * @property $folio_e
 * @property $id_identidades
 * @property $id_documentos
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento $documento
 * @property Especialc $especialc
 * @property Grado $grado
 * @property Identidad $identidad
 * @property Otroc $otroc
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombres', 'apellido_pat', 'apellido_mat', 'estado_civil', 'apellido_casada', 'nacionalidad', 'direccion', 'fecha_nac', 'provincia', 'canton', 'departamento', 'serie_libreta_mil', 'n_libreta_mil', 'nro_matricula', 'tipo_sangre', 'ci', 'emision', 'afp', 'n_n_cua', 'n_seguro', 'telefono', 'celular', 'contacto_emer', 'celular_emer', 'email', 'clave', 'institucion', 'n_cuenta', 'id_grados', 'id_especialcs', 'id_otrocs', 'desde_mes_e', 'desde_gestion_e', 'hasta_mes_e', 'hasta_gestion_e', 'cargo_e', 'nom_empresa_e', 'tel_empresa_e', 'motivo_e', 'folio_e', 'id_identidades', 'id_documentos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento()
    {
        return $this->belongsTo(\App\Models\Documento::class, 'id_documentos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function especialc()
    {
        return $this->belongsTo(\App\Models\Especialc::class, 'id_especialcs', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grado()
    {
        return $this->belongsTo(\App\Models\Grado::class, 'id_grados', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function identidad()
    {
        return $this->belongsTo(\App\Models\Identidad::class, 'id_identidades', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function otroc()
    {
        return $this->belongsTo(\App\Models\Otroc::class, 'id_otrocs', 'id');
    }
    
}
