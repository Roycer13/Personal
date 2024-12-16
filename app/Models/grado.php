<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grado
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $mes
 * @property $gestion
 * @property $instituto
 * @property $ciudad_pais
 * @property $folio_g
 * @property $titulo1
 * @property $descripcion1
 * @property $mes1
 * @property $gestion1
 * @property $instituto1
 * @property $ciudad_pais1
 * @property $folio_g1
 * @property $titulo2
 * @property $descripcion2
 * @property $mes2
 * @property $gestion2
 * @property $instituto2
 * @property $ciudad_pais2
 * @property $folio_g2
 * @property $created_at
 * @property $updated_at
 *
 * @property Dato[] $datos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grado extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['titulo', 'descripcion', 'mes', 'gestion', 'instituto', 'ciudad_pais', 'folio_g', 'titulo1', 'descripcion1', 'mes1', 'gestion1', 'instituto1', 'ciudad_pais1', 'folio_g1', 'titulo2', 'descripcion2', 'mes2', 'gestion2', 'instituto2', 'ciudad_pais2', 'folio_g2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datos()
    {
        return $this->hasMany(\App\Models\Dato::class, 'id', 'id_grados');
    }
    
}
