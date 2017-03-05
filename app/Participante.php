<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'participantes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'cpf', 'rg', 'sexo', 'data_nascimento', 'perfil'];


}
