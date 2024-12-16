<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Identidad
 *
 * @property $id
 * @property $img_identidad
 * @property $img_identidad2
 * @property $created_at
 * @property $updated_at
 *
 * @property Dato[] $datos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Identidad extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['img_identidad', 'img_identidad2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datos()
    {
        return $this->hasMany(\App\Models\Dato::class, 'id', 'id_identidades');
    }
    
}
