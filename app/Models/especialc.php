<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialc
 *
 * @property $id
 * @property $gesion_mes_ce
 * @property $evento_ce
 * @property $duracion_ce
 * @property $intitucion_ce
 * @property $folio_ce
 * @property $created_at
 * @property $updated_at
 *
 * @property Dato[] $datos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Especialc extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['gesion_mes_ce', 'evento_ce', 'duracion_ce', 'intitucion_ce', 'folio_ce'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datos()
    {
        return $this->hasMany(\App\Models\Dato::class, 'id', 'id_especialcs');
    }
    
}
