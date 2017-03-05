@extends('layout')
@section('content')



        <div class="col-md-6">
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
              <tfoot>
                  <a href='/eventos/create'>Adicionar</a>
              </tfoot>


              <tbody>
              @foreach ($eventos as $evento)
                <tr>
                  <td>
                    <a href="/eventos/view/{{ $evento->id }}">{{$evento->titulo}}</a>
                  </td>
                  <td>
                     {{$evento->url}}
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
@endsection
