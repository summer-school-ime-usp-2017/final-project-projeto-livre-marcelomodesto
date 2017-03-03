@extends('layout')

@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Eventos</div>
          <table class="table table-striped">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Título</th>
                  <th>Descrição</th>
                  <th>URL</th>
                  <th>Local</th>
                  <th>Início</th>
                  <th>Término</th>
                  <th>Início Inscrições</th>
                  <th>Término Inscrições</th>
                  <th>Início Submissão Resumos</th>
                  <th>Témino Submissão Resumos</th>
                  <th>Taxa Estudante</th>
                  <th>Taxa Professor</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    {{$evento->id}}
                </td>
                <td>
                  {{$evento->titulo}}
                </td>
                <td>
                   {{$evento->descricao}}
                </td>
                <td>
                   {{$evento->url}}
                </td>
                <td>
                   {{$evento->local}}
                </td>
                <td>
                   {{$evento->data_inicio}}
                </td>
                <td>
                   {{$evento->data_termino}}
                </td>
                <td>
                   {{$evento->data_inicio_inscricoes}}
                </td>
                <td>
                   {{$evento->data_termino_inscricoes}}
                </td>
                <td>
                   {{$evento->data_inicio_submissao}}
                </td>
                <td>
                   {{$evento->data_termino_submissao}}
                </td>
                <td>
                   {{$evento->taxa_estudante}}
                </td>
                <td>
                   {{$evento->taxa_professor}}
                </td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
