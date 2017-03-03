@extends('layout')
@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/eventos/create">
            <span class="glyphicon glyphicon-plus"></span> Eventos
          </a>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">Eventos</div>
            <table class="table table-striped">
              <thead>
                  <tr>
                    <th>Evento</th>
                    <th>URL</th>
                    <th>Início</th>
                    <th>Término</th>
                      <th>Ações</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($eventos as $evento)
                <tr>
                  <td>
                    <a href="/evento/view/{{ $evento->id }}">{{$evento->titulo}}</a>
                  </td>
                  <td>
                     {{$evento->website}}
                  </td>
                  <td>
                     {{$evento->data_inicio}}
                  </td>
                  <td>
                     {{$evento->data_termino}}
                  </td>
                  <td>
                    <a href="/evento/edit/{{ $evento->id }}">Editar</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection
