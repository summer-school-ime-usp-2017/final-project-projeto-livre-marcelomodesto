<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  protected $fillable = [
    'titulo',
    'local',
    'descricao' ,
    'website',
    'data_inicio',
    'data_termino',
    'data_inicio_inscricao',
    'data_termino_inscricao',
    'data_inicio_submissao',
    'data_termino_submissao',
    'taxa_professor',
    'taxa_estudante'
  ];
}
